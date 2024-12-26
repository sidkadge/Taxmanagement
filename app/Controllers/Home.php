<?php

namespace App\Controllers;
use App\Models\Register_model;

class Home extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
       
    }
    public function index(): string
    {
        return view('login');
    }
    public function login()
    {
        return view('login');
    }
   public function getSocietiesByZone()
   {
  
    $postData = $this->request->getPost();
    $zone_id = $postData['zone_id']; 
    $model = new Register_model();
    $wherecond = array('zone_id' => $zone_id, 'is_active' => 'Y');
    $societies = $model->getalldata('society', $wherecond);
    echo json_encode($societies);
   }
   public function getBuildingsBySociety()
{
    $postData = $this->request->getPost();
    $zone_id = $postData['zone_id'];
    $society_id = $postData['society_id'];

    $model = new Register_model();
    
    $wherecond = array(
        'is_active' => 'Y',
        'zone_id' => $zone_id,
        'society_id' => $society_id
    );

    $buildings = $model->getalldata('building', $wherecond);
    echo json_encode($buildings);
}
   
    public function Customerlist()
    {
        $session = \Config\Services::session();
        if (!$session->has('id')) {
            return redirect()->to('/');
        }
        $model = new Register_model();
    
        $wherecond = array('role' => 'customer','allot_partner'=> null);
    
        $data['customer'] = $model->getalldata('register', $wherecond);

        $db = \Config\Database::connect();
        $builder = $db->table('register');
        $builder->like('accesslevel', 'yourorder');
        $builder->where(['role' => 'Admin', 'active' => 'Y']);
        $query = $builder->get();
        $data['userdata'] = $query->getResult();
    //    echo '<pre>'; print_r($data['customer']);die;
        return view('Admin/Customerlist',$data);
    }
    public function register()
    {
        $db = \Config\Database::connect();
        $postData = $this->request->getPost();
        $zoneId = $postData['Zone'];
    
        // Handle Society
        if ($postData['Societyname'] === 'Other') {
            $societyName = $postData['OtherSocietyname'];
            $societyData = [
                'Societyname' => $societyName,
                'zone_id' => $zoneId
            ];
            $db->table('society')->insert($societyData);
            $societyId = $db->insertID();
        } else {
            $societyId = $postData['Societyname'];
        }
        if ($postData['Buildingname'] === 'Other') {
            $buildingName = $postData['OtherBuildingname'];
            $buildingData = [
                'Buildingname' => $buildingName,
                'zone_id' => $zoneId,
                'society_id' => $societyId
            ];
            $db->table('building')->insert($buildingData);
            $buildingId = $db->insertID();
        } else {
            $buildingId = $postData['Buildingname'];
        }
        $registerData = [
            'full_name' => $postData['full_name'],
            'email' => $postData['email'],
            'mobile_no' => $postData['mobile_no'],
            'role' => 'customer',
            'location' => $postData['location'],
            'alternate_name' => $postData['Alternate_name'],
            'alternate_number' => $postData['Alternatenumber'],
            'flat' => $postData['Flat'],
            'floor' => $postData['Floor'],
            'address' => $postData['Address'],
            'password' => $postData['password'],
            'agree' => $postData['agree'],
            'Zone' => $zoneId,
            'Societyname' => $societyId,
            'Buildingname' => $buildingId
        ];
        $db->table('register')->insert($registerData);
        return redirect()->to('login');
    }
    
    public function dologin()
    {
    $model = new Register_model();
    $session = \CodeIgniter\Config\Services::session();
    $mobile_no = $this->request->getPost('mobile_no');
    $password = $this->request->getPost('password');  
    $user = $model->checkCredentials(['mobile_no' => $mobile_no]);
    if ($user) {
        if ($password === $user['password']) {  
            $userData = [
                'id' => $user['id'],
                'full_name' => $user['full_name'],
                'email' => $user['email'],
                'mobile_no' => $user['mobile_no'],
                'role' => $user['role'],
                // 'accesslevel'=>$user['accesslevel'],
            
            ];
            $session->set($userData);
            if ($user['role'] === 'customer') {
                return redirect()->to(base_url('product'));
            } 
                elseif ($user['role'] === 'Admin') {
                    return redirect()->to(base_url('AdminDashboard'));
            } 
            elseif ($user['role'] === 'Admin') {
                return redirect()->to(('AdminDashboard'));
            } else {
                session()->setFlashdata('error', 'Invalid credentials');
                return redirect()->to('login'); 
            }
        } else {
            session()->setFlashdata('error', 'Invalid password');
            return redirect()->to('login');
        }

    } else {
        session()->setFlashdata('error', 'User not found');
        return redirect()->to('login');
    }
}
public function coustmordashboard()
{
    echo view('customer/coustmordashboard');

}
public function genrateinvoice() 
{
    $model = new Register_model();
    $wherecond = array('is_deleted' => 'N');
    $data['society'] = $model->getalldata('tbl_society', $wherecond);
     $model = new Register_model();
    $wherecond = array('is_deleted' => 'N');
    $data['building'] = $model->getalldata('tbl_building', $wherecond);
    $wherecond = array('is_deleted' => 'N');
    $data['flats'] = $model->getalldata('tbl_flats', $wherecond);
    echo view('Admin/genrateinvoice',$data);
}
public function invoice()
{
    echo view('Admin/invoice');
}
public function AdminDashboard()
{
    $model = new Register_model();
    // $wherecond = array('order_status' => 'B');
    // $orders = $model->getalldata('tbl_order', $wherecond);
    // if (!is_array($orders)) {
    //     $orders = [];
    // }
    // $data['order'] = [];
    // foreach ($orders as $order) {
    //     $product = $model->getProductById($order->product);
    //     $order->product_name = $product->productname; 
    //     $user = $model->getuserById($order->coustomerid);
    //     $order->user_name = $user->full_name; 
    //     $data['order'][] = $order;
    // }
    return view('Admin/AdminDashboard');
}
public function addsociety()
{
   
    echo view('Admin/addsociety');
}
public function addbuilding()
{
    $model = new Register_model();
    $wherecond = array('is_deleted' => 'N');
    $data['society'] = $model->getalldata('tbl_society', $wherecond);
    // print_r($data);die;
    echo view('Admin/addbuilding',$data);
}
public function addflats()
{
    $model = new Register_model();
    $wherecond = array('is_deleted' => 'N');
    $data['society'] = $model->getalldata('tbl_society', $wherecond);
     $model = new Register_model();
    $wherecond = array('is_deleted' => 'N');
    $data['building'] = $model->getalldata('tbl_building', $wherecond);
    echo view('Admin/addflats',$data);
}
public function create()
{
    $postData = $this->request->getPost();
    // print_r($postData);die;
    $table = isset($postData['table']) ? $postData['table'] : null;
    if (empty($table)) {
        return $this->response->setJSON([
            'status' => 400,
            'message' => 'Table name is required.'
        ])->setStatusCode(400);
    }
    unset($postData['table'], $postData['submit']);
    if (empty($postData)) {
        return redirect()->back(); 
    }
    $builder = $this->db->table($table);
    if ($builder->insert($postData)) {
        return redirect()->back(); 
    }
    return redirect()->back(); 
}


    public function read($table, $id = null)
    {
        try {
            if ($id) {
                $result = $this->db->table($table)
                                   ->where('id', $id)
                                   ->where('is_deleted', 'N') 
                                   ->get()
                                   ->getRowArray();
            } else {
                $result = $this->db->table($table)
                                   ->where('is_deleted', 'N') 
                                   ->get()
                                   ->getResultArray();
            }
            if ($result) {
                return $this->response->setJSON([
                    'status' => 200,
                    'message' => 'Records retrieved successfully',
                    'data' => $result
                ])->setStatusCode(200);
            }
            return $this->response->setJSON([
                'status' => 404,
                'message' => 'No records found',
                'data' => []
            ])->setStatusCode(404);
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'status' => 500,
                'message' => 'An error occurred: ' . $e->getMessage(),
                'data' => []
            ])->setStatusCode(500);
        }
    }
     // UPDATE record
        public function update($table, $id)
        {
            $input = json_decode(file_get_contents('php://input'), true);
            // print_r($input);die;
            if (!is_array($input) || empty($input)) {
                return $this->response->setJSON([
                    'status' => 400,
                    'message' => 'No valid input data provided'
                ])->setStatusCode(400);
            }
            if (isset($input[0]) && is_array($input[0])) {
                $input = $input[0]; 
            }
            $validFields = $this->getTableColumns($table);
            $updateData = [];
            foreach ($validFields as $field) {
                if (isset($input[$field])) {
                    $updateData[$field] = $input[$field];
                }
            }
            if (empty($updateData)) {
                return $this->response->setJSON([
                    'status' => 400,
                    'message' => 'No valid fields provided for update'
                ])->setStatusCode(400);
            }
            if ($this->db->table($table)->update($updateData, ['id' => $id])) {
                return $this->response->setJSON([
                    'status' => 200,
                    'message' => 'Record updated successfully'
                ])->setStatusCode(200);
            }
            return $this->response->setJSON([
                'status' => 500,
                'message' => 'Record update failed'
            ])->setStatusCode(500);
        }
        private function getTableColumns($table)
        {
            return $this->db->getFieldNames($table);
        }
        public function delete($table, $id)
        {
            $updateData = ['is_deleted' => 'Y'];
            if ($this->db->table($table)->where('id', $id)->update($updateData)) {
                return $this->response->setJSON([
                    'status' => 200,
                    'message' => 'Record marked as deleted successfully'
                ])->setStatusCode(200);
            }
            return $this->response->setJSON([
                'status' => 500,
                'message' => 'Failed to mark the record as deleted'
            ])->setStatusCode(500);
        }
        public function logout()
        {
            $session = session();
            $session->destroy();
            return redirect()->to('/');
        }
}
 

