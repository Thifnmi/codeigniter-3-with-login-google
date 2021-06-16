<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
		$this->load->library("cart");//Để sử dụng được shopping cart trong CI, ta phải load thư viện cho nó
		$this->load->model('product_model');
	}

	public function index()
	{

		// phần thông tin shop như địa chỉ số điện thoại
		$data['shop'] = $this->contact_model->get_all();
		// mạng xã hội
		 $data['cart_list']=$this->cart->contents();
		  $data['mangxh']= $this->contact_model->mangxh();
		$this->load->view('pages/header',$data);
		$this->load->view('pages/cart',$data);
		 $this->load->view('pages/footer',$data);
	}
	public function insert($id){// click vào buynow nó sẽ dẫn đường dẫn đến insert và truyền vào function một cái id
		$where = ['id' => $id];
		$product=$this->product_model->get($where);
		//Shopping Cart trong Codeigniter lưu dưới dạng mảng và có những key bắt buộc không được sửa như như id, qty, price, name.
		//Ngoài ra nó còn có thêm key options chứa các thông tin con như size, color của sản phẩm đó nên nếu những key này không giống với database của bạn thì hãy xử lý trước khi insert để đồng bộ.
        $data=array(
            "id" => "$product->id",
			"name" => "$product->tensanpham",
			"price" => "$product->giamgia",
			"qty" => "1",
			"link_hinhanh" => "$product->link_hinhanh"	
        );
        // Them san pham vao gio hang
        if($this->cart->insert($data)){
        //Trong đoạn code này, sử dụng hàm insert của thư viện shopping cart để thêm 1 mảng data vào trong giỏ hàng và trả về kết quả nếu thành công.
        //  echo "Them san pham thanh cong";
             $data['cart_list']=$this->cart->contents();//Show danh sách sản phẩm có trong giỏ hàng:
             //$data['cart_list'] 
             //Để truyền dữ liệu qua view thì tất cả dữ liệu bạn phải đưa vào một mảng kết hợp $data, Controller sẽ tự động tạo các biến bên view tương ứng với các key và các value trong mảng $data đó. Mỗi dữ liệu có thể ở các kiểu như: float, double, int, string, object, array.
             $data['shop'] = $this->contact_model->get_all();//get_all trả về 1 mảng gán mảng đó tên shop
              $data['mangxh']= $this->contact_model->mangxh();
             $this->load->view('pages/header',$data);
             $this->load->view('pages/cart',$data);
             $this->load->view('pages/footer',$data);
        }else{
            echo "Them san pham that bai";
        }
        
	}
	public function delete($rowid){//Để xóa 1 sản phẩm có trong giỏ hàng, ta cần lấy được thuộc tính rowId của sản phẩm đó trong giỏ hảng, sau đó gán cho đối tượng số lượng sản phẩm là qty = 0.
		$this->cart->update(array('rowid' => $rowid ,'qty' =>0 ));
		$data['cart_list']=$this->cart->contents();
		$data['shop'] = $this->contact_model->get_all();
        $data['mangxh']= $this->contact_model->mangxh();
		$this->load->view('pages/header',$data);
        $this->load->view('pages/cart',$data);
        $this->load->view('pages/footer',$data);
	}
	// nếu muốn có thể viết thêm function để xóa hết sản phẩm trong giỏ hàng  $this->cart->destroy();
	//24/12/2020
	public function update(){
		$cart=$this->cart->contents();
		foreach ($cart as $key => $value) {
			$qty_update = $this->input->post('qty_'.$value['id']);
			$data= ['rowid'=>$key,'qty'=>$qty_update];
			$this->cart->update($data);
		}
		
		$data['cart_list']=$this->cart->contents();
		$data['shop'] = $this->contact_model->get_all();
        $data['mangxh']= $this->contact_model->mangxh();
		$this->load->view('pages/header',$data);
        $this->load->view('pages/cart',$data);
        $this->load->view('pages/footer',$data);
	}
	//24/12/2020 yến
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */