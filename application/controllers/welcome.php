<?php


class welcome extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('tampilan');
	}

	
	public function kirim_email()
	{
		$pengirim 	= $this->input->post('dari');
		$penerima 	= $this->input->post('ke');
		$subject 	= $this->input->post('subjek');
		$pesan 		= $this->input->post('pesan');

		// Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'example@gmail.com',  // Email gmail
            'smtp_pass'   => 'xxx',  // Password yang di tutorial di awal
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        $this->email->initialize($config);

        // Email dan nama pengirim
        $this->email->from($pengirim,'Robot Email');

        // Email penerima
        $this->email->to($penerima); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        // $this->email->attach('https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');

        // Subject email
        $this->email->subject($subject);

        // Isi email
        $this->email->message($pesan);

        // $this->email->send();

        // echo var_dump($this->email->send());

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
            ini_set('display_errors', 1);
            // echo $this->email->send();
        }
	}
}
