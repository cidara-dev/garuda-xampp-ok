<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\101\123\105\120\x41\124\110") or exit("\x4e\157\40\x64\x69\x72\x65\x63\x74\x20\x73\x63\162\151\160\164\40\141\x63\x63\x65\x73\163\x20\141\154\154\x6f\x77\x65\144"); class Users extends CI_Controller { public function __construct() { goto gm6oH; grZXb: redirect("\141\165\164\x68"); goto D0BCM; O0zKx: $this->load->model("\x4d\141\x73\x74\145\162\137\155\x6f\144\x65\x6c", "\x6d\x61\x73\x74\x65\162"); goto J3Hgu; gm6oH: parent::__construct(); goto YqVq_; J3Hgu: $this->load->model("\104\x61\163\x68\142\x6f\141\162\x64\x5f\155\157\x64\145\x6c", "\x61\144\155\151\156\144\x61\163\x68\x62\x6f\141\162\x64"); goto NiEW_; Ofo0P: $this->load->model("\x55\163\x65\162\x73\137\x6d\x6f\x64\x65\154", "\x75\163\145\162\163"); goto O0zKx; D0BCM: Lufou: goto IOlP2; YqVq_: if ($this->ion_auth->logged_in()) { goto Lufou; } goto grZXb; NiEW_: $this->form_validation->set_error_delimiters('', ''); goto sojZm; IOlP2: $this->load->library(["\144\x61\x74\x61\x74\141\142\x6c\x65\163", "\x66\x6f\x72\x6d\x5f\x76\141\x6c\x69\x64\141\164\x69\157\156"]); goto Ofo0P; sojZm: } public function is_admin() { goto aXplA; aXplA: if ($this->ion_auth->is_admin()) { goto Jv5BW; } goto k_LQD; MwtqG: Jv5BW: goto Ii9O5; k_LQD: show_error("\110\141\156\x79\141\x20\101\144\x6d\151\156\x69\163\x74\162\141\164\x6f\x72\40\x79\141\x6e\147\x20\144\151\142\145\162\151\x20\x68\141\153\40\165\x6e\x74\165\153\40\155\145\x6e\x67\x61\153\163\145\163\x20\150\x61\154\x61\x6d\141\156\40\x69\x6e\151\x2c\40\74\x61\x20\x68\x72\x65\146\75\x22" . base_url("\x64\x61\x73\150\142\x6f\x61\x72\144") . "\42\76\x4b\145\x6d\x62\x61\154\x69\x20\153\145\x20\x6d\145\x6e\x75\40\x61\x77\x61\154\74\57\x61\76", 403, "\101\153\x73\145\163\x20\124\145\162\x6c\x61\162\141\156\x67"); goto MwtqG; Ii9O5: } public function output_json($data, $encode = true) { goto Suii6; Uqelb: $this->output->set_content_type("\141\x70\160\154\151\143\x61\x74\151\x6f\156\x2f\x6a\x73\157\x6e")->set_output($data); goto h0IRb; NNcvi: J7_na: goto Uqelb; LeaxX: $data = json_encode($data); goto NNcvi; Suii6: if (!$encode) { goto J7_na; } goto LeaxX; h0IRb: } public function data($id = null) { $this->is_admin(); $this->output_json($this->users->getDataUsers($id), false); } public function index() { goto ehC4L; Q3J3t: $data["\x73\155\164"] = $this->admindashboard->getSemester(); goto dJb_P; ehC4L: $this->is_admin(); goto wPGSE; dJb_P: $data["\163\155\164\137\x61\143\x74\151\166\145"] = $this->admindashboard->getSemesterActive(); goto gTaG7; aXpds: $this->load->view("\x5f\x74\145\x6d\160\154\x61\164\145\163\x2f\x64\141\163\150\142\157\x61\162\144\x2f\x66\157\x6f\x74\x65\x72\56\160\x68\x70"); goto f7WsA; OqI2x: $data["\164\160\x5f\x61\143\164\151\166\x65"] = $this->admindashboard->getTahunActive(); goto Q3J3t; wPGSE: $data = ["\x75\163\145\x72" => $this->ion_auth->user()->row(), "\152\x75\144\x75\154" => "\125\163\145\162\x20\x4d\x61\x6e\x61\x67\x65\155\x65\156\164", "\163\165\142\x6a\x75\144\165\x6c" => "\x44\x61\x74\x61\40\125\x73\x65\x72"]; goto J1yr7; gTaG7: $this->load->view("\137\164\x65\x6d\x70\x6c\x61\x74\145\163\x2f\144\x61\163\150\x62\157\x61\162\144\x2f\150\x65\141\x64\145\162\56\x70\150\x70", $data); goto vryHF; J1yr7: $data["\x74\x70"] = $this->admindashboard->getTahun(); goto OqI2x; vryHF: $this->load->view("\x75\163\x65\162\163\57\x64\141\x74\x61"); goto aXpds; f7WsA: } public function edit($id) { goto QHJMT; cCplR: $this->load->view("\137\164\x65\155\160\x6c\141\x74\x65\163\x2f\x64\141\x73\x68\142\157\141\x72\144\x2f\146\x6f\x6f\x74\x65\162\x2e\160\150\x70"); goto C304x; hWEAk: $data = ["\x75\x73\x65\162" => $this->ion_auth->user()->row(), "\152\x75\144\x75\x6c" => "\x55\x73\145\162\40\115\x61\156\x61\x67\x65\x6d\x65\156\164", "\163\x75\142\x6a\x75\x64\x75\154" => "\x45\144\x69\x74\x20\104\x61\164\141\40\125\163\x65\162", "\165\163\x65\x72\163" => $this->ion_auth->user($id)->row(), "\x67\162\x6f\x75\x70\163" => $this->ion_auth->groups()->result(), "\154\x65\x76\x65\x6c" => $level[0]]; goto rygzT; hSCCY: $this->load->view("\165\163\x65\x72\163\x2f\x65\144\x69\x74"); goto cCplR; rygzT: $this->load->view("\137\164\145\x6d\x70\x6c\141\164\x65\163\57\x64\141\163\150\x62\x6f\141\x72\x64\57\150\145\141\x64\x65\x72\56\x70\x68\x70", $data); goto hSCCY; QHJMT: $level = $this->ion_auth->get_users_groups($id)->result(); goto hWEAk; C304x: } public function edit_info() { goto HQkaW; g294Q: if ($this->form_validation->run() === FALSE) { goto FQHfR; } goto aLk1V; J6bm4: $this->form_validation->set_rules("\146\x69\x72\x73\x74\137\x6e\x61\x6d\145", "\106\x69\x72\x73\x74\x20\x4e\x61\155\145", "\x72\145\x71\x75\151\x72\x65\144"); goto raJS0; dwxev: $data["\163\x74\141\x74\x75\x73"] = false; goto YOnqv; YOnqv: $data["\145\x72\x72\x6f\x72\x73"] = ["\165\163\145\162\156\x61\155\x65" => form_error("\x75\163\145\x72\x6e\x61\x6d\x65"), "\146\151\162\163\x74\137\x6e\x61\155\x65" => form_error("\x66\x69\162\x73\164\137\156\x61\155\145"), "\154\141\x73\x74\137\x6e\141\x6d\145" => form_error("\x6c\x61\163\x74\x5f\156\141\155\145"), "\x65\155\141\151\154" => form_error("\145\x6d\141\151\x6c")]; goto M2Ksh; M2Ksh: RVtod: goto a8cKP; HQkaW: $this->is_admin(); goto VjYpq; JPYfc: $update = $this->master->update("\x75\x73\x65\x72\163", $input, "\151\144", $id); goto lv_Lq; jne3P: goto RVtod; goto vT0SB; dJQn2: $input = ["\x75\x73\x65\162\x6e\x61\155\x65" => $this->input->post("\x75\163\145\162\156\141\x6d\x65", true), "\146\151\162\163\164\x5f\156\x61\155\x65" => $this->input->post("\146\x69\162\x73\164\x5f\156\x61\155\145", true), "\154\x61\163\164\x5f\x6e\x61\x6d\145" => $this->input->post("\x6c\x61\163\x74\137\x6e\141\x6d\x65", true), "\145\x6d\141\x69\154" => $this->input->post("\145\x6d\x61\151\x6c", true)]; goto JPYfc; yDbwh: $this->form_validation->set_rules("\x65\x6d\141\x69\x6c", "\105\x6d\x61\x69\x6c", "\x72\x65\x71\x75\151\x72\145\144\174\x76\x61\154\151\144\x5f\145\155\141\x69\154"); goto g294Q; VjYpq: $this->form_validation->set_rules("\x75\163\145\162\x6e\x61\155\x65", "\x55\x73\x65\162\x6e\x61\x6d\145", "\x72\145\x71\165\151\x72\x65\x64"); goto J6bm4; vT0SB: FQHfR: goto dwxev; a8cKP: $this->output_json($data); goto rj0NM; lv_Lq: $data["\163\x74\x61\164\x75\x73"] = $update ? true : false; goto jne3P; aLk1V: $id = $this->input->post("\151\x64", true); goto dJQn2; raJS0: $this->form_validation->set_rules("\x6c\x61\163\164\137\156\x61\155\145", "\114\x61\163\x74\x20\116\x61\x6d\145", "\162\145\x71\165\151\162\x65\144"); goto yDbwh; rj0NM: } public function edit_status() { goto YZf_J; DUlpn: $update = $this->master->update("\165\x73\145\162\x73", $input, "\x69\144", $id); goto u12XV; qIFxS: $input = ["\141\143\164\x69\166\145" => $this->input->post("\x73\x74\x61\164\165\163", true)]; goto DUlpn; lZhYs: N6bnR: goto N8EZc; irbMb: $data["\163\164\141\x74\x75\x73"] = false; goto YxxAA; M5MyZ: if ($this->form_validation->run() === FALSE) { goto g2JrX; } goto AB8Lt; earM0: g2JrX: goto irbMb; N8EZc: $this->output_json($data); goto Fp216; ewbbw: goto N6bnR; goto earM0; YxxAA: $data["\145\162\162\157\x72\x73"] = ["\163\x74\141\x74\165\163" => form_error("\x73\164\141\x74\x75\x73")]; goto lZhYs; AB8Lt: $id = $this->input->post("\151\144", true); goto qIFxS; u12XV: $data["\x73\164\141\x74\x75\x73"] = $update ? true : false; goto ewbbw; Zjx8S: $this->form_validation->set_rules("\x73\x74\141\x74\x75\163", "\x53\x74\141\164\165\x73", "\x72\145\161\165\151\x72\x65\144"); goto M5MyZ; YZf_J: $this->is_admin(); goto Zjx8S; Fp216: } public function edit_level() { goto M131K; GSQri: $id = $this->input->post("\151\x64", true); goto csAFz; MzY8t: goto NNqMk; goto GOFEf; GOFEf: AxjlL: goto gZo1K; FXUmC: $data["\x65\x72\x72\157\x72\163"] = ["\154\145\x76\145\x6c" => form_error("\154\x65\166\x65\154")]; goto wH9ON; K6fy_: if ($this->form_validation->run() === FALSE) { goto AxjlL; } goto GSQri; JncNq: $update = $this->master->update("\165\163\x65\162\x73\137\x67\x72\157\165\x70\163", $input, "\165\163\145\x72\137\x69\x64", $id); goto aamu1; wH9ON: NNqMk: goto YUFz5; QaszA: $this->form_validation->set_rules("\154\145\x76\x65\x6c", "\x4c\x65\x76\145\154", "\x72\145\x71\165\x69\x72\x65\144"); goto K6fy_; M131K: $this->is_admin(); goto QaszA; gZo1K: $data["\163\164\x61\x74\165\x73"] = false; goto FXUmC; csAFz: $input = ["\147\162\x6f\165\x70\137\x69\144" => $this->input->post("\154\145\x76\145\154", true)]; goto JncNq; YUFz5: $this->output_json($data); goto K6tUR; aamu1: $data["\163\164\x61\164\165\x73"] = $update ? true : false; goto MzY8t; K6tUR: } public function change_password() { goto BRS3G; iQDwT: $data = ["\x73\x74\141\x74\x75\163" => false, "\x65\x72\162\157\x72\163" => ["\x6f\x6c\144" => form_error("\x6f\x6c\x64"), "\x6e\x65\167" => form_error("\156\145\167"), "\156\x65\x77\137\x63\x6f\x6e\x66\151\x72\x6d" => form_error("\x6e\145\x77\137\143\x6f\156\146\x69\162\155")]]; goto flnyn; bXIOt: goto AS7IT; goto qAUlK; npw5U: $this->output_json($data); goto l670i; Qu0sb: $this->form_validation->set_rules("\156\145\167\137\143\x6f\156\146\151\162\155", $this->lang->line("\x63\x68\141\156\x67\x65\x5f\x70\141\x73\163\x77\157\162\144\x5f\166\x61\x6c\151\x64\x61\x74\x69\x6f\156\x5f\156\x65\x77\x5f\160\141\x73\x73\x77\157\x72\144\137\143\157\x6e\x66\151\162\155\137\x6c\x61\x62\145\x6c"), "\x72\x65\x71\165\151\162\x65\x64"); goto j3HSZ; rQZcT: $this->form_validation->set_rules("\x6e\145\x77", $this->lang->line("\x63\150\x61\x6e\x67\145\137\x70\x61\163\163\167\x6f\x72\x64\137\x76\141\x6c\151\x64\x61\x74\x69\x6f\x6e\x5f\x6e\145\167\x5f\160\x61\x73\163\167\x6f\162\144\137\x6c\141\142\145\154"), "\x72\x65\161\x75\x69\x72\x65\144\174\155\151\x6e\x5f\154\145\156\147\164\x68\x5b" . $this->config->item("\x6d\x69\x6e\x5f\160\x61\163\x73\167\157\162\144\137\154\x65\x6e\x67\x74\150", "\x69\x6f\x6e\137\141\165\x74\150") . "\x5d\174\x6d\141\164\x63\x68\x65\163\133\x6e\145\x77\137\143\x6f\156\146\151\162\155\x5d"); goto Qu0sb; BRS3G: $this->form_validation->set_rules("\x6f\154\144", $this->lang->line("\x63\150\141\x6e\147\x65\x5f\x70\141\x73\x73\167\x6f\162\x64\x5f\x76\x61\x6c\x69\144\141\x74\x69\x6f\156\x5f\157\x6c\x64\x5f\160\x61\163\163\167\157\x72\x64\137\154\x61\142\x65\x6c"), "\x72\x65\161\165\151\162\145\144"); goto rQZcT; l0fLX: $data = ["\163\x74\x61\x74\x75\x73" => false, "\155\163\147" => $this->ion_auth->errors()]; goto cr8W_; IpRvf: $data["\163\x74\x61\164\165\163"] = true; goto Dh7Xo; LtJK0: if ($change) { goto iNq0a; } goto l0fLX; qAUlK: o1mtE: goto iQDwT; XIVvy: $change = $this->ion_auth->change_password($identity, $this->input->post("\x6f\x6c\144"), $this->input->post("\x6e\x65\x77")); goto LtJK0; j3HSZ: if ($this->form_validation->run() === FALSE) { goto o1mtE; } goto n5abz; n5abz: $identity = $this->session->userdata("\x69\144\x65\x6e\164\x69\164\171"); goto XIVvy; cr8W_: goto fF5zc; goto DjjgW; DjjgW: iNq0a: goto IpRvf; Dh7Xo: fF5zc: goto bXIOt; flnyn: AS7IT: goto npw5U; l670i: } public function delete($id) { goto J0GOY; C5Pn7: $data["\x73\164\141\x74\165\x73"] = $this->ion_auth->delete_user($id) ? true : false; goto SjV4w; J0GOY: $this->is_admin(); goto C5Pn7; SjV4w: $this->output_json($data); goto sfuBs; sfuBs: } }