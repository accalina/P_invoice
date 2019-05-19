<?php

class Main extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->userdata = [
            "username"  => "Ikhsan Bayu",
            "userpic"   => "https://avatars1.githubusercontent.com/u/25729519?s=460&v=4",
            "corpName"  => "Development Corporation",
            "corpAddr"  => "1969 Sunny Glen Lane Cleveland, OH 44115",
            "corpPhone" => "216-858-5922",
            "corpEmail" => "hrd@dev-corp.com"
        ];
        $this->db = $this->load->database('dbinvoice',true);
    }

    // ---------------------------------------------------------

    function index(){
        redirect("invoice?id=1");
    }

    // INVOICE -------------------------------------------------
    function addInvoice(){
        $allVendor = $this->db->query("SELECT * FROM vendors")->result_array();
        $metadata = ["userdata" => $this->userdata, "vendors" => $allVendor];

        $this->load->view('invoice_view/templates/header');
        $this->load->view('invoice_view/templates/sidebar',$metadata);
        $this->load->view('invoice_view/invoices/addinvoice',$metadata);
        $this->load->view('invoice_view/templates/footer');
    }

    function addInvoice_engine(){
        $vendorid   = $this->input->post('vendorid');
        $jatuhtempo = $this->input->post('jatuhtempo');
        $nomorakun  = $this->input->post('nomorakun');

        $hasil = $this->db->query("INSERT INTO invoices (vendor_id, jatuhTempo, noAkun) VALUES (?,?,?)",[$vendorid, $jatuhtempo, $nomorakun]);
        if ($hasil) {
            redirect("addInvoice");
        }else{
            echo "Something went wrong";
        }
    }

    function trackinvoice(){
        $invoice = $this->input->get('id');
        $hasil = $this->db->query("SELECT * FROM invoices as a inner join vendors as b on a.vendor_id = b.id where a.id = ?",[$invoice])->result_array();
        $metadata = ["userdata" => $this->userdata, "dbdata" => $hasil[0]];

        $this->load->view('invoice_view/templates/header');
        $this->load->view('invoice_view/templates/sidebar',$metadata);
        $this->load->view('invoice_view/trackInvoice',$metadata);
        $this->load->view('invoice_view/templates/footer');
    }

    // VENDORS -------------------------------------------------

    function addVendors(){
        $allVendor = $this->db->query("SELECT * FROM vendors WHERE status = 'active'")->result_array();
        $metadata = ["userdata" => $this->userdata, "vendors" => $allVendor];

        $this->load->view('invoice_view/templates/header');
        $this->load->view('invoice_view/templates/sidebar',$metadata);
        $this->load->view('invoice_view/vendors/addVendors',$metadata);
        $this->load->view('invoice_view/templates/footer');
    }

    function addVendors_engine(){
        $nama   = $this->input->post('namavendor');
        $alamat = str_replace("\n"," ",$this->input->post('alamatvendor'));
        $telp   = $this->input->post('telpvendor');
        $email  = $this->input->post('emailvendor');

        $hasil = $this->db->query("INSERT INTO vendors (nama, alamat, telp, email) VALUES (?,?,?,?)",[$nama, $alamat, $telp, $email]);
        if ($hasil) {
            redirect("addVendors");
        }else{
            echo "Something went wrong";
        }
    }

    function updateVendors_engine(){
        $id = $this->input->post('vendorid');
        $nama = $this->input->post('namavendor');
        $alamat = str_replace("\n"," ",$this->input->post('alamatvendor'));
        $telp = $this->input->post('telpvendor');
        $email = $this->input->post('emailvendor');

        $result = $this->db->query("UPDATE vendors SET nama=?,alamat=?,telp=?,email=? WHERE id=?",[$nama,$alamat,$telp,$email,$id]);
        if($result){
            redirect("addVendors");
        }else{
            echo "Something went wrong";
        }
   }

   function deleteVendors_engine(){
        $id = $this->input->get('vendorid');
        $result = $this->db->query("UPDATE vendors SET status='inactive' WHERE id=?",[$id]);
        if($result){
            redirect("addVendors");
        }else{
            echo "Something went wrong";
        }
   }

}