<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
    {
          parent::__construct();

          $this->load->helper(array('form', 'url'));
          $this->load->model('Property_model');
          if (!$this->session->userdata('admin_id')) {
           redirect('login/index');
        } 
      
    }
	public function index($page)
	{
		$this->load->view('includes/Header');
		$this->load->view('includes/Sidebar');
		$this->load->view('includes/Aside');
		$this->load->view('template/'.$page,$_GET);	
		$this->load->view('includes/Footer');
   
    }
    public function index1()
	{
    	$this->load->view('welcome_message');
       echo "Admin";
	}
	

	 function put_location(){
		//echo $title =  $this->input->post('location_title');
		//echo $pro_type = $this->input->post('PropertyType');
	
			// $data[] = array(
			// 				'location_title'  => $title,
			// 				'property_type'    =>  $pro_type
							
						
			// 			);

            //   $this->Property_model->insert_Location($data);
			//  echo 'Location Created successfully';
			 


			 $title =  $this->input->post('location_title');
		         $pro_type = $this->input->post('PropertyType');
			
				  $data[] = array(
								
								 'location_title'    => $title,
								 'property_type' => $pro_type
								
							     );
		
			   $this->Property_model->insert_Location($data);
			   //echo 'Subject Created successfully';

			   echo '<script>alert("Location Added Successfully");window.location="'.base_url().'Location";</script>';
	 }
	 function put_ownerDetails(){
		   $location_id =$this->input->post('titleSelect');
		   $PropertyName =  $this->input->post('PropertyName');
		   $OwnerName =  $this->input->post('OwnerName');
		   $Email =  $this->input->post('Email');
		   $mobno =  $this->input->post('mobno');
		   $Telno =  $this->input->post('Telno');
		   $editor1 =  $this->input->post('editor1');
		   $editor2 =  $this->input->post('editor2');
		   $editor3 =  $this->input->post('editor3');
		   
		   $data[] = array(
						'location_id' =>  $location_id,					
						'prop_name'    => $PropertyName,
						'own_name' => $OwnerName,
						'own_email'    => $Email,
						'own_mbno' => $mobno,
						'own_telno'    => $Telno,
						'own_descp' => $editor1,
						'own_addr'    => $editor2,
						'own_road' => $editor3,
		   			);

		   $this->Property_model->insert_ownerDetails($data);
		   echo '<script>alert(" Added Successfully");window.location="'.base_url().'Index";</script>';
	 }

	 function put_property(){

		//$PropertyName  =  $this->input->post('');
		$titleSelect =  $this->input->post('titleSelect');

		$AboutProperty =  $this->input->post('editor1');
		$Pro_includes =  $this->input->post('editor2');
		$Pro_cuisine =  $this->input->post('editor3');
		$Pro_activites =  $this->input->post('editor4');
		$Pro_getting=  $this->input->post('editor5');
		$Pro_distance =  $this->input->post('editor6');
		$Pro_around =  $this->input->post('editor7');
		$Pro_terms =  $this->input->post('editor8');
		$Pro_service =  $this->input->post('service');
//   
//		  $config = array(
//			'upload_path' => './uploads/',
//			'allowed_types' => 'jpg|jpeg|png|bmp',
//			'max_size' => 0,
			// 'filename' => $this->session->userdata('school_id').$class.$subid.url_title($this->input->post('file')),
		//	'filename' => url_title($this->input->post('file')),
			// 'encrypt_name' => true
		//  );
		  // $this->load->library('upload', $config);
	  
//		  $this->load->library('upload');
//		  $this->upload->initialize($config);
//		  
//		  if ($this->upload->do_upload('file')) {
//			
//		  }
                  $name_array = array();
        $count = count($_FILES['userfile']['size']);
        foreach($_FILES as $key=>$value)
        for($s=0; $s<=$count-1; $s++) {
        $_FILES['userfile']['name']=$value['name'][$s];
        $_FILES['userfile']['type']    = $value['type'][$s];
        $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
        $_FILES['userfile']['error']       = $value['error'][$s];
        $_FILES['userfile']['size']    = $value['size'][$s];   
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']    = '100';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
        // $this->load->library('upload', $config);
            $this->load->library('upload');
		   $this->upload->initialize($config);
        $this->upload->do_upload();
        $data = $this->upload->data();
        $name_array[] = $data['file_name'];
            }
            $names = implode(',', $name_array);
//		$data[] = array(
//					 'owner_id' =>  $titleSelect,					
//					 'Aboutpro'    => $AboutProperty,
//					 'Pro_includes' => $Pro_includes,
//					 'Pro_cuisine'    => $Pro_cuisine,
//					 'Pro_activites' => $Pro_activites,
//					 'Pro_getting'    => $Pro_getting,
//					 'Pro_distance' => $Pro_distance,
//					 'Pro_around'    => $Pro_around,
//					 'Pro_terms' => $Pro_terms,
//					 'Pro_service' => implode(",", $Pro_service),
////					 'Pro_images' => $this->upload->file_name
//                                         'Pro_images' => $names 
//					);
                
                
                       $i = 0;
                 if ($i == 0) {

                 $insert_array = array(
                                          'owner_id' =>  $titleSelect,					
					 'Aboutpro'    => $AboutProperty,
					 'Pro_includes' => $Pro_includes,
					 'Pro_cuisine'    => $Pro_cuisine,
					 'Pro_activites' => $Pro_activites,
					 'Pro_getting'    => $Pro_getting,
					 'Pro_distance' => $Pro_distance,
					 'Pro_around'    => $Pro_around,
					 'Pro_terms' => $Pro_terms,
					 'Pro_service' => implode(",", $Pro_service),
//					 'Pro_images' => $this->upload->file_name
                                         'Pro_images' => $names
                  );

                $insert[] = $insert_array;
                
                } 

		$this->Property_model->insert_proDetails($insert);
		echo '<script>alert(" Added Successfully");window.location="'.base_url().'Property_details";</script>';

	 }

	 function get_location(){

			$data  =	$this->Property_model->select_Location();
			$output = ' 
			<table class="table table-bordered table-striped table_data">
			<thead>
						<tr>
						<th>ID</th>
						<th>Location Title</th>
						<th>Property Type</th>
						<th>Actions</th>
						</tr>
			</thead>
			<tbody>
			';
			
                            
                                   
			
			foreach($data->result() as $row)
			{
				$id = $row->location_id;
			$output .= '	
			
			<tr>
			<td>'.$id.'</td>
			<td>'.$row->location_title.'</td>
			<td>'.$row->property_type.'</td>
			<td class="box-tools">
			<a href="View_location?id='.$id.'"  class="btn btn-app btn-sm" >  <i class="fa fa-eye"></i></a>
			<a href="Edit_location.php?id='.$id.'" class="btn btn-app btn-sm"><i class="fa fa-edit"></i></a>
			<a name="delete"  id="'.$id.'"  class="btn btn-app btn-sm delete" >  <i class="fa fa-times"></i></a>
			 
		 </td>
			';
			}
				
		

				  
				  $output .= ' </tbody>	</table>';
				
				  echo $output;
	

				//  foreach($data->result() as $row1){
				// 	echo "ID ".$row1->location_id."<br>";
				// 	echo  "Location ".$row1->location_title."<br>";
				// 	echo  "Type ".$row1->property_type."<br>";
				//  }
					 
		   }		
		   
		   
		  function get_Tiltle()
		   {
			
			$data  =	$this->Property_model->select_Location();
			 $output = '  <option value="default">Select Location</option>';
			foreach($data->result() as $row)
			{
				
				$output .= ' 
				   <option value='. $row->location_title.'>'.$row->location_title.'</option>';
		
		    }
			// $output .= '</select>';
			echo $output;
		}
		   function get_place($location)
		   {
			$place  = $this->db->query("SELECT * FROM locations WHERE property_type='$location'");

			
			 $output = '  <option value="default">Select Location</option>';
			foreach($place->result() as $row)
			{
				
				$output .= ' 
				   <option value='.$row->location_id.'>'.$row->location_title.'</option>';
		
		    }
			// $output .= '</select>';
			echo $output;
		}
		
		
		function get_OwnerDetails(){

			$protype = $_GET['protype'];

	//$place  = $this->db->query("SELECT * FROM locations WHERE property_type='".$protype."'")->row_array();

			$data1  =	$this->Property_model->fetch_location_protype($protype)->result();
			foreach($data1 as $row1){
               echo $place_id = $row1->location_title;

			}

			 echo $this->db->last_query(); 
			// insert_slider
			foreach($data1 as $row1){
				$place_id = $row1->location_id;
			//	echo $place_id = $place['location_id'];
				//echo $place = $row1->property_type;

               // $data  =	$this->Property_model->select_Owner($place_id);
			$data =	$this->db->query("SELECT * FROM prop_ownerdetails WHERE location_id='".$place_id."'")->row_array();
                $output = ' 
			<table class="table table-bordered table-striped">
			<thead>
						<tr>
						<th>ID</th>
						<th>Owner Name</th>
						<th>Mobile No</th>
						<th>Tel No</th>
						<th>Email</th>
						<th>Property Type</th>
						<th>Actions</th>
						
						</tr>
			</thead>
			<tbody>
			';
                		
			// foreach($data->result() as $row)
			// {
				//$id = $row->owner_id;
			$output .= '	
			
			<tr>
			<td>'.$data['owner_id'].'</td>
			<td>'.$data['own_name'].'</td>
			<td>'.$data['own_mbno'].'</td>
			<td>'.$data['own_telno'].'</td>
			<td>'.$data['own_email'].'</td>
			<td>'.$data['own_descp'].'</td>
			<td class="box-tools">
			<a href="View_owner?id='.$data['owner_id'].'"  class="btn btn-app btn-sm" >  <i class="fa fa-eye"></i></a>
			<a href="Edit_OwnerDetails.php?id='.$data['owner_id'].'" class="btn btn-app btn-sm"><i class="fa fa-edit"></i></a>
			<a name="delete"  id="'.$data['owner_id'].'"  class="btn btn-app btn-sm delete" >  <i class="fa fa-times"></i></a>
		 </td>
			</tr>
			';
			// }
				
		

				  
				  $output .= ' </tbody>	</table>';
				
				  echo $output;
	






			}
					 
		   }	


		   function get_Property(){

			$data  =	$this->Property_model->select_Owner();
			$output = '  <option value="default">Select Location</option>';
		   foreach($data->result() as $row)
		   {
			      $proname = $row->prop_name;
			      $owner_id = $row->owner_id;
			   $output .= ' 
				
				<option value="'.$proname.'">'.$proname.'</option>';
	   
		   }
		   // $output .= '</select>';
		   echo $output;



		   }

		   var $GobalPropertyNam = "";
		   function get_Property1(){
		     
			$data  =	$this->Property_model->selectOwner();
			$output = '  <option value="default">Select Location</option>';
		   foreach($data->result() as $row)
		   {
			      $this->GobalPropertyName = $row->prop_name;
			      $owner_id = $row->owner_id;
			   $output .= ' 
				
				<option value="'.$owner_id.'" >'.$this->GobalPropertyName.'</option>';
	   
		   }

		  
		   // $output .= '</select>';
		   echo $output;



		   }

		   function get_PropertyDetails(){
           
			
			//$student['name'];  
			
			$data  =	$this->Property_model->select_PropertyDetails();
			$output = ' 
			<table class="table table-bordered table-striped">
			<thead>
						<tr>
						<th>ID</th>
						<th>Property Name</th>
						<th>About Property</th>
						<th>Actions</th>
						
						
						</tr>
			</thead>
			<tbody>
			';
			
                            
                                   
			
			foreach($data->result() as $row)
			{
		      $id = $row->pro_id;
			
			$PropertyName  = $this->db->query("SELECT prop_name FROM prop_ownerdetails WHERE owner_id= '$row->owner_id'")->row_array();
			$output .= '	
			
			<tr>
			<td>'.$id.'</td>
			<td style="width:20em;">'.$PropertyName['prop_name'].'</td>
			<td>'.$row->Aboutpro.'</td>
			
			<td class="box-tools">
			<a href="View_property?id='.$id.'"  class="btn btn-app btn-sm" >  <i class="fa fa-eye"></i></a>
			<a href="Edit_property.php?id='.$id.'" class="btn btn-app btn-sm update"><i class="fa fa-edit"></i></a>
			
			<a name="delete"  id="'.$id.'"  class="btn btn-app btn-sm delete" >  <i class="fa fa-times"></i></a>
		 </td>
			</tr>
			';
			}
				
		

				  
				  $output .= ' </tbody>	</table>';
				
				  echo $output;
	
		   }



		 function  put_tarif(){

			$PropertyType =$this->input->post('PropertyName');
			$PropertyName =  $this->input->post('PropertyType');
			$Tariff1 =  $this->input->post('Tariff1');
		
			
			$data[] = array(
						 'owner_id' =>  $PropertyType,					
						 'type_pro'    => $PropertyName,
						 'plan_price' => $Tariff1,
						
						);
 
			$this->Property_model->insert_tariff($data);
			echo '<script>alert(" Added Successfully");window.location="'.base_url().'Tariff";</script>';
	  

		 }

		 function get_PropertyName(){
			$data  =	$this->Property_model->select_Owner();
			$output = '  <option value="default">Select Location</option>';
		   foreach($data->result() as $row)
		   {
			      $PropertyName = $row->prop_name;
			      $owner_id = $row->owner_id;
			   $output .= ' 
				
				<option value="'.$owner_id.'" >'.$PropertyName.'</option>';
	   
		   }

		 }
		 function get_tariff(){


			$data  =	$this->Property_model->select_tariff();
			$output = ' 
			<table class="table table-bordered table-striped table_data">
			<thead>
						<tr>
						<th>Property Name</th>
						<th>Type of Property</th>
						<th>Tariff Plan</th>
						<th>Actions</th>
						</tr>
			</thead>
			<tbody>
			';
			
                            
                                   
			
			foreach($data->result() as $row)
			{
				$id = $row->tariffplan_id;
				$PropertyName  = $this->db->query("SELECT prop_name FROM prop_ownerdetails WHERE owner_id= '$row->owner_id'")->row_array();
			$output .= '	
			
			<tr>
			<td>'.$PropertyName['prop_name'].'</td>
			<td>'.$row->type_pro.'</td>
			<td>'.$row->plan_price.'</td>
			<td class="box-tools">
			<a href="View_tariff?id='.$id.'"  class="btn btn-app btn-sm" >  <i class="fa fa-eye"></i></a>
			<a href="Edit_tariff.php?id='.$id.'" class="btn btn-app btn-sm"><i class="fa fa-edit"></i></a>
			<a name="delete"  id="'.$id.'"  class="btn btn-app btn-sm delete" >  <i class="fa fa-times"></i></a>
		 </td>
			';
			}
				
		

				  
				  $output .= ' </tbody>	</table>';
				
				  echo $output;

		 }


		 function  view_location(){ 

		 $id = $_GET['id'];
	   $location  = $this->db->query("SELECT * FROM locations WHERE location_id='$id'")->row_array();
	 
	      $output ='
		
			<tr>
			   <td><b>Property Type</b></td>
			   <td>'.$location['property_type'].'</td>
			</tr>
			<tr>
			   <td><b>Location Title</b></td>
			   <td>'.$location['location_title'].'</td>
			</tr>
			<tr>
			   <td style="vertical-align:middle"><b>Created On</b></td>
			   <td>'.$location['created_on'].'</td>
			  
			</tr>';

			echo  $output;
		 }

		 function  view_Owner(){ 

			$id = $_GET['id'];
		  $owner  = $this->db->query("SELECT * FROM prop_ownerdetails WHERE owner_id='$id'")->row_array();
		  $loc = $owner['location_id'];
		   $owner1  = $this->db->query("SELECT * FROM locations WHERE location_id ='$loc'")->row_array();
			 $output ='
		   
			   <tr>
				  <td><b>Location Title</b></td>
				  <td>'.$owner1['location_title'].'</td>
			   </tr>
			   <tr>
				  <td><b>Property Name</b></td>
				  <td>'.$owner['prop_name'].'</td>
			   </tr>
			   <tr>
				  <td style="vertical-align:middle"><b>Name</b></td>
				  <td>'.$owner['own_name'].'</td>
			   </tr>
			   <tr>
				  <td><b>Email</b></td>
				  <td>'.$owner['own_email'].'</td>
			   </tr>
			   <tr>
				  <td><b>Mobile Number</b></td>
				  <td>'.$owner['own_mbno'].'</td>
			   </tr>
			   <tr>
				  <td style="vertical-align:middle"><b>Tel Number</b></td>
				  <td>'.$owner['own_telno'].'</td>
			   </tr>
			   <tr>
			   <td><b>Description</b></td>
			   <td>'.$owner['own_descp'].'</td>
			</tr>
			<tr>
			   <td><b>Address</b></td>
			   <td>'.$owner['own_addr'].'</td>
			</tr>
			<tr>
			   <td style="vertical-align:middle"><b>Road</b></td>
			   <td>'.$owner['own_road'].'</td>
			</tr>'
			
			   
			 
			   ;
   
			   echo  $output;
			}
			function  view_Property(){ 

				$id = $_GET['id'];
			  $property_details  = $this->db->query("SELECT * FROM property_details WHERE pro_id='$id'")->row_array();
			
				 $output ='
			   
				   <tr>
					  <td><b>About Property</b></td>
					  <td>'.$property_details['Aboutpro'].'</td>
				   </tr>
				   <tr>
					  <td><b>Includes</b></td>
					  <td>'.$property_details['Pro_includes'].'</td>
				   </tr>
				   <tr>
					  <td style="vertical-align:middle"><b>Cuisine</b></td>
					  <td>'.$property_details['Pro_cuisine'].'</td>
				   </tr>
				   <tr>
					  <td><b>Activites</b></td>
					  <td>'.$property_details['Pro_activites'].'</td>
				   </tr>
				   <tr>
					  <td><b>Getting There</b></td>
					  <td>'.$property_details['Pro_getting'].'</td>
				   </tr>
				   <tr>
					  <td style="vertical-align:middle"><b>Distance</b></td>
					  <td>'.$property_details['Pro_distance'].'</td>
				   </tr>
				   <tr>
				   <td><b>Around</b></td>
				   <td>'.$property_details['Pro_around'].'</td>
				</tr>
				<tr>
				   <td><b>Terms & Condition</b></td>
				   <td>'.$property_details['Pro_terms'].'</td>
				</tr>
				<tr>
				   <td style="vertical-align:middle"><b>Road</b></td>
				  
				</tr>'
				
				   
				 
				   ;
	   
				   echo  $output;
				}


				function view_tariff(){
					$id = $_GET['id'];
					$tariff  = $this->db->query("SELECT * FROM tariff_plan WHERE tariffplan_id='$id'")->row_array();
				  
					   $output ='
					 
						 <tr>
							<td><b>Property Type</b></td>
							<td>'.ucwords($tariff['type_pro']).'</td>
						 </tr>
						 <tr>
							<td><b>Plan Price</b></td>
							<td>'.$tariff['plan_price'].'</td>
						 </tr>
						';
			 
						 echo  $output;
				}
	

				function fetch_property1(){
					$output = array();  
					$this->load->model("Property_model");  
				echo	$data = $this->Property_model->fetch_property($_POST["upadte_id"]);  
					foreach($data as $row)  
					{  
						 $output['Aboutpro'] = $row->Aboutpro;  
						 $output['Pro_includes'] = $row->Pro_includes;
						  $output['Pro_cuisine'] = $row->Pro_cuisine;  
						 $output['Pro_activites'] = $row->Pro_activites;
						  $output['Pro_getting'] = $row->Pro_getting;  
						 $output['Pro_distance'] = $row->Pro_distance;
						  $output['Pro_around'] = $row->Pro_around;  
						 $output['Pro_terms'] = $row->Pro_terms; 
						  $output['Pro_service'] = $row->Pro_service; 
						// $output['Pro_images'] = $row->Pro_images;  
						
						 if($row->Pro_images != '')  
						 {  
							  $output['Pro_images'] = '<img src="'.base_url().'uploads/'.$row->Pro_images.'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_user_image" value="'.$row->Pro_images.'" />';  
						 }  
						 else  
						 {  
							  $output['Pro_images'] = '<input type="hidden" name="hidden_user_image" value="" />';  
						 }  
					}  
					echo json_encode($output);  
		 
				}


					function fetch_property(){
					$id = $_GET['id'];	
					$data  =	$this->Property_model->fetch_property($id);
				
					foreach($data as $row)  
					{  
						 $output['Aboutpro'] = $row->Aboutpro;  
						 $output['Pro_includes'] = $row->Pro_includes;
						  $output['Pro_cuisine'] = $row->Pro_cuisine;  
						 $output['Pro_activites'] = $row->Pro_activites;
						  $output['Pro_getting'] = $row->Pro_getting;  
						 $output['Pro_distance'] = $row->Pro_distance;
						  $output['Pro_around'] = $row->Pro_around;  
						 $output['Pro_terms'] = $row->Pro_terms; 
						 $output['Pro_service'] = $row->Pro_service;
						// $output['Pro_images'] = $row->Pro_images;  
						
						 if($row->Pro_images != '')  
						 {  
							  $output['Pro_images'] = '<img src="'.base_url().'uploads/'.$row->Pro_images.'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_user_image" value="'.$row->Pro_images.'" />';  
						 }  
						 else  
						 {  
							  $output['Pro_images'] = '<input type="hidden" name="hidden_user_image" value="" />';  
						 }  
					}  
					echo json_encode($output);  
		 
				}



				function update_Property(){
					$id = $_GET['id'];
				
					  $updated_data = array(  
                      'Aboutpro'    =>     $this->input->post('editor1'),  
                      'Pro_includes'           =>     $this->input->post('editor2'),  
                      'Pro_cuisine'              =>     $this->input->post('editor3'),  
                      'Pro_activites'           =>     $this->input->post('editor4'),  
                      'Pro_getting'            =>     $this->input->post('editor5'),  
                      'Pro_distance'            =>     $this->input->post('editor6'), 
                      'Pro_around'            =>     $this->input->post('editor7'),  
                      'Pro_terms'            =>     $this->input->post('editor8'), 
                    //  'correct_answer'     =>     $this->input->post('editor8'),  
                      // 'link'               =>     $this->input->post('editor1') 

                    
                );
               
              
                $this->load->model('Property_model');  
                $this->Property_model->update_Property($this->input->post("upadte_id"), $updated_data);  
               // echo $this->db->last_query(); 
                echo "<script>alert('Updated Successfully');window.location='".base_url()."Property_details';</script>";
				}


				 function fetch_location(){

                     $id = $_GET['id'];	
					 $data  =	$this->Property_model->fetch_location($id);
				
					foreach($data as $row)  
					{  
						 $output['location_title'] = $row->location_title;  
						 $output['property_type'] = $row->property_type;
					
					}  
					echo json_encode($output);  
					 
		      }		
		      function update_Location(){
		      		$id = $_GET['id'];
				
					  $updated_data = array(  
                        'location_title'    =>     $this->input->post('location_title'),  
                        'property_type'           =>     $this->input->post('PropertyType'),  
                       );
               
              
                $this->load->model('Property_model');  
                $this->Property_model->update_Location($this->input->post("upadte_id"), $updated_data);  
               // echo $this->db->last_query(); 
                echo "<script>alert('Updated Successfully');window.location='".base_url()."Location';</script>";

		      }

		    function fetch_tariff(){

                     $id = $_GET['id'];	
					 $data  =	$this->Property_model->fetch_tariff($id);
				  
					foreach($data as $row)  
					{  

				$PropertyName  = $this->db->query("SELECT prop_name FROM prop_ownerdetails WHERE owner_id= '$row->pro_id'")->row_array();
				

						 $output['pro_id'] =$PropertyName['prop_name'];  
						 $output['type_pro'] = $row->type_pro;
						 $output['plan_price'] = $row->plan_price;


					
					}  
					echo json_encode($output);  
					 
		      }		
		       function update_Tariff(){
		      		$id = $_GET['id'];
				
					  $updated_data = array(  
                        'type_pro'     => $this->input->post('protype'),  
                        'plan_price'   => $this->input->post('proprice'),  
                       );
               
              
                $this->load->model('Property_model');  
                $this->Property_model->update_Tariff($this->input->post("upadte_id"), $updated_data);  
               // echo $this->db->last_query(); 
                echo "<script>alert('Updated Successfully');window.location='".base_url()."Tariff';</script>";

		      } 


					function fetch_owner(){
					$id = $_GET['id'];	
					$data  =	$this->Property_model->fetch_owner($id);
				    //$output['res'] = $this->db->last_query(); 

          
			foreach($data as $row)  
					{  

		   $owner1  = $this->db->query("SELECT * FROM locations WHERE location_id ='$row->location_id'")->row_array();

						 $output['location_title'] = $owner1['location_title'];  
						 $output['prop_name'] = $row->prop_name;
						  $output['own_name'] = $row->own_name;  
						 $output['own_email'] = $row->own_email;
						  $output['own_mbno'] = $row->own_mbno;  
						 $output['own_telno'] = $row->own_telno;
						  $output['own_descp'] = $row->own_descp;  
						 $output['own_addr'] = $row->own_addr;
						  $output['own_road'] = $row->own_road;  
					}  
					echo json_encode($output);  
		 
				} 

				function update_Homestay(){
					$id = $_GET['id'];
				
					  $updated_data = array(  
                      'location_id'    =>     $this->input->post('titleSelect'),  
                      'prop_name'           =>     $this->input->post('PropertyName'),  
                      'own_name'              =>     $this->input->post('OwnerName'),  
                      'own_email'           =>     $this->input->post('Email'),  
                      'own_mbno'            =>     $this->input->post('mobno'),  
                      'own_telno'            =>     $this->input->post('Telno'), 
                      'own_descp'            =>     $this->input->post('editor1'),  
                      'own_addr'            =>     $this->input->post('editor2'), 
                      'own_road'            =>     $this->input->post('editor3'), 
                   
                );
               
              
                $this->load->model('Property_model');  
                $this->Property_model->update_Homestay($this->input->post("upadte_id"), $updated_data);  
               // echo $this->db->last_query(); 
                echo "<script>alert('Updated Successfully');window.location='".base_url()."Homestay';</script>";
				}


           function delete_location()  
      {  
           $this->load->model("Property_model");  
           $this->Property_model->delete_location($_POST["user_id"]);  
           echo 'Deleted Successfully';  
      }  
           function delete_property()  
      {  
           $this->load->model("Property_model");  
           $this->Property_model->delete_property($_POST["user_id"]);  
           echo 'Deleted Successfully';  
      }  
         function delete_tariff()  
      {  
           $this->load->model("Property_model");  
           $this->Property_model->delete_tariff($_POST["user_id"]);  
           echo 'Deleted Successfully';  
      }  
       function delete_owner()  
      {  
           $this->load->model("Property_model");  
           $this->Property_model->delete_owner($_POST["user_id"]);  
           echo 'Deleted Successfully';  
      }  
      

      function fetch_checkbox(){

             $id = $_GET['id'];
                	$this->load->model("Property_model");  
		     	$data = $this->Property_model->fetch_property($id); 
	$service  = $this->db->query("SELECT Pro_service FROM property_details WHERE pro_id='".$id."'")->row_array(); 
	  $service['Pro_service'];

	 $thearray = explode(", ", $service['Pro_service']);
    print_r($thearray);
	// echo $serv =explode(",",$service['Pro_service']);




				
      	$output = '
          <label>Room Services:</label>
      	<div class="box-body">
                              <div class="col-md-12 col-sm-12">
                                <label class = "checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Breakfast Included"> Breakfast Included
                                </label>
                                <label class = "checkbox-inline">
                                <input type="checkbox"  name="service[]" value="Free wifi"> Free wifi
                                 </label>
                                <label class = "checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Double Bed"> Double Bed
                                </label>    
                                 
                                <label class = "checkbox-inline">
                                <input type="checkbox" name="service[]" value="120sqmt"> 120sqmt
                                 </label>
                                <label class = "checkbox-inline">
                                  <input type="checkbox" name="service[]" value="8 persons"> 8 persons
                                </label>                     
                                  <label class = "checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Free internet"> Free internet
                                </label>
                              </div><br><br>
                              <div class="col-md-12 col-sm-12">
                                <label class="checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Private balcony"> Private balcony
                                </label>
                                <label class="checkbox-inline">
                                <input type="checkbox" name="service[]" value="Good room service"> Good room service
                                 </label>
                                <label class="checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Flat screen tv"> Flat screen tv
                                </label>    
                                  <label class="checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Fully AC"> Fully AC
                                </label>
                                <label class="checkbox-inline">
                                <input type="checkbox" name="service[]" value="Mountain view"> Mountain view
                                 </label><br><br>
                                <label class="checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Free pick & drop facilies"> Free pick & drop facilies
                                </label>                     
                                  
                              </div>
                                
                          

                                                                   
                           </div>';

                           echo $output;
      
      }

     function  retrivedata(){


     	      $id = $_GET['id'];
              
		      
	// $query  = $this->db->query("SELECT Pro_service FROM property_details WHERE pro_id='".$id."'")->row_array(); 
	 // $a =     $query['Pro_service'];
	 // $b=explode(",",$a);

  //    echo $b;

     $query = $this->db->query("SELECT Pro_service FROM property_details WHERE pro_id='".$id."'");

foreach ($query->result() as $row)
{
         $a = $row->Pro_service;
         $b=explode(",",$a);
        // print_r($b);
        
}
  
$checked = "checked";
  $output = '
          <label>Room Services:</label>
      	<div class="box-body">
                              <div class="col-md-12 col-sm-12">
                                <label class = "checkbox-inline">
                 <input type="checkbox" name="service[]" value="Breakfast Included" ';
                                
 // if(in_array("Breakfast",$b))
//{
	echo   $checked;
//}







                          $output .= '        > Breakfast Included
                                </label>
                                <label class = "checkbox-inline">
                                <input type="checkbox"  name="service[]" value="Free wifi"> Free wifi
                                 </label>
                                <label class = "checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Double Bed"> Double Bed
                                </label>    
                                 
                                <label class = "checkbox-inline">
                                <input type="checkbox" name="service[]" value="120sqmt"> 120sqmt
                                 </label>
                                <label class = "checkbox-inline">
                                  <input type="checkbox" name="service[]" value="8 persons"> 8 persons
                                </label>                     
                                  <label class = "checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Free internet"> Free internet
                                </label>
                              </div><br><br>
                              <div class="col-md-12 col-sm-12">
                                <label class="checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Private balcony"> Private balcony
                                </label>
                                <label class="checkbox-inline">
                                <input type="checkbox" name="service[]" value="Good room service"> Good room service
                                 </label>
                                <label class="checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Flat screen tv"> Flat screen tv
                                </label>    
                                  <label class="checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Fully AC"> Fully AC
                                </label>
                                <label class="checkbox-inline">
                                <input type="checkbox" name="service[]" value="Mountain view"> Mountain view
                                 </label><br><br>
                                <label class="checkbox-inline">
                                  <input type="checkbox" name="service[]" value="Free pick & drop facilies"> Free pick & drop facilies
                                </label>                     
                                  
                              </div>
                                
                          

                                                                   
                           </div>';

                           echo $output;
     
	 
	  
	  
}
           

           function get_Enquiry($place){
 				

			
			$data  =	$this->Property_model->select_Enquiry($place);
			//echo $this->db->last_query(); 
			$output = ' 
			<table class="table table-bordered table-striped">
			<thead>
						<tr>
						<th>ID</th>
						<th>Property Name</th>
						<th>Name</th>
						<th>View Details</th>

						<th>Actions</th>
						
						
						</tr>
			</thead>
			<tbody>
			';
			
                            
                                   
			
			foreach($data->result() as $row)
			{
			 $id = 	 $row->enquiry_id;
		      $owner_id = $row->owner_id;
			
			$PropertyName  = $this->db->query("SELECT prop_name FROM prop_ownerdetails WHERE owner_id= '$owner_id'")->row_array();
			$output .= '	
			
			<tr>
			<td>'.$id.'</td>
			<td style="width:20em;">'.$PropertyName['prop_name'].'</td>
			<td>'.$row->quest_name.'</td>
			<td><a href="View_enquiry?id='.$id.'"  class="btn btn-app btn-sm" >  <i class="fa fa-eye"></i></a></td>
			
			<td class="box-tools">
			
			
			
			<a name="delete"  id="'.$id.'"  class="btn btn-app btn-sm delete" >  <i class="fa fa-times"></i></a>
		 </td>
			</tr>
			';
			}
				
		

				  
				  $output .= ' </tbody>	</table>';
				
				  echo $output;















           }



      function  viewEnquiry(){ 

				$id = $_GET['id'];
			  $details  = $this->db->query("SELECT * FROM `enquiry` WHERE `enquiry_id`='$id'")->row_array();
			
				 $output ='
			   
				   <tr>
					  <td><b>Name</b></td>
					  <td>'.$details['quest_name'].'</td>
				   </tr>
                                   
				   <tr>
					  <td><b>Email</b></td>
					  <td>'.$details['quest_email'].'</td>
				   </tr>
				   <tr>
					  <td style="vertical-align:middle"><b>Mobile Number</b></td>
					  <td>'.$details['quest_mobno'].'</td>
				   </tr>
				   <tr>
					  <td><b>Tel Number</b></td>
					  <td>'.$details['quest_telno'].'</td>
				   </tr>
				   <tr>
					  <td><b>Arrival Date</b></td>
					  <td>'.$details['quest_arrival'].'</td>
				   </tr>
				   <tr>
					  <td style="vertical-align:middle"><b>Departure Date</b></td>
					  <td>'.$details['quest_depture'].'</td>
				   </tr>
				   <tr>
				   <td><b>Number of Adults</b></td>
				   <td>'.$details['quest_no_adult'].'</td>
				</tr>
				<tr>
				   <td><b>Number of Children</b></td>
				   <td>'.$details['quest_no_child'].'</td>
				</tr>
				<tr>
				   <td style="vertical-align:middle"><b>Number of Vegetarian</b></td>
				   <td>'.$details['quest_veg'].'</td>
				</tr>

				<tr>
				   <td><b>Number of Non-Vegetarian</b></td>
				   <td>'.$details['quest_nveg'].'</td>
				</tr>
				<tr>
				   <td style="vertical-align:middle"><b>Address</b></td>
				   <td>'.$details['quest_address'].'</td>
				</tr>
				<tr>
				   <td style="vertical-align:middle"><b>Message</b></td>
				   <td>'.$details['quest_message'].'</td>
				</tr>'
				
				   
				 
				   ;
	   
				   echo  $output;
				}

	 function delete_Enquiry()  
      {  
           $this->load->model("Property_model");  
           $this->Property_model->delete_Enquiry($_POST["user_id"]);  
           echo 'Deleted Successfully';  
      }  


     function add_homecms(){

    if (isset($_POST['submit'])) {
    	 $title = $this->input->post('title');
         $subtitle = $this->input->post('subtitle');
         $editor1 = $this->input->post('editor1');
           $config = array(
			'upload_path' => './uploads/',
			'allowed_types' => 'jpg|jpeg|png|bmp',
			'max_size' => 0,
			
			'filename' => url_title($this->input->post('file')),
			
		  );
          $this->load->library('upload');
		  $this->upload->initialize($config);
		  
		  if ($this->upload->do_upload('file')) {
			
		  } 
	   $data[] = array(
                          'home_title' => $title,
                            'home_subtitle'    => $subtitle,
                           'home_description'  => $editor1,
                           'home_image' =>$this->upload->file_name
                            
                     );

       $this->Property_model->addcmsHome($data);
       echo "<script>alert('Created Successfully');window.location='".base_url()."Cms_home';</script>";
    }

   }



	 function get_cmshome(){

			$data  =	$this->Property_model->get_cmshome();
			$output = ' 
			<table class="table table-bordered table-striped table_data">
			<thead>
						<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Sub Title</th>
						<th>Description</th>
						<th>Actions</th>
						</tr>
			</thead>
			<tbody>
			';
			
                            
                                   
			
			foreach($data->result() as $row)
			{
				$id = $row->cms_home_id;
			$output .= '	
			
			<tr>
			<td>'.$id.'</td>
			<td>'.$row->home_title.'</td>
			<td>'.$row->home_subtitle.'</td>
			<td>'.$row->home_description.'</td>
			<td class="box-tools">
			<a href="View_cmsHome?id='.$id.'"  class="btn btn-app btn-sm" >  <i class="fa fa-eye"></i></a>
			<a href="Edit_cmsHome?id='.$id.'" class="btn btn-app btn-sm"><i class="fa fa-edit"></i></a>
			<a name="delete"  id="'.$id.'"  class="btn btn-app btn-sm delete" >  <i class="fa fa-times"></i></a>
			 
		 </td>
			';
			}
				
		

				  
				  $output .= ' </tbody>	</table>';
				
				  echo $output;
	

				//  foreach($data->result() as $row1){
				// 	echo "ID ".$row1->location_id."<br>";
				// 	echo  "Location ".$row1->location_title."<br>";
				// 	echo  "Type ".$row1->property_type."<br>";
				//  }
					 
		   }		


          function view_cmshome(){

		 $id = $_GET['id'];
	   $hme  = $this->db->query("SELECT * FROM `cms_home` WHERE `cms_home_id`='$id'")->row_array();
	 
	      $output ='
		
			<tr>
			   <td><b>Title</b></td>
			   <td>'.$hme['home_title'].'</td>
			</tr>
			<tr>
			   <td><b>Sub Title</b></td>
			   <td>'.$hme['home_subtitle'].'</td>
			</tr>
			<tr>
			   <td style="vertical-align:middle"><b>Description</b></td>
			   <td>'.$hme['home_description'].'</td>
			  
			</tr>';

			echo  $output;

          }
          function update_cmsHome(){
		      		$id = $_GET['id'];
				
					  $updated_data = array(  
                        'home_title'    =>     $this->input->post('title'),  
                        'home_subtitle'           =>     $this->input->post('subtitle'),
                         'home_description'           =>     $this->input->post('editor1')  
                       );
               
              
                $this->load->model('Property_model');  
                $this->Property_model->update_cmsHome($id, $updated_data);  
               // echo $this->db->last_query(); 
                echo "<script>alert('Updated Successfully');window.location='".base_url()."Cms_home';</script>";

		      }

				 function fetch_cmshme(){

                     $id = $_GET['id'];	
					 $data  =	$this->Property_model->fetch_cmshme($id);
				
					foreach($data as $row)  
					{  
						 $output['home_title'] = $row->home_title;  
						 $output['home_subtitle'] = $row->home_subtitle;
					     $output['home_description'] = $row->home_description;
					}  
					echo json_encode($output);  
					 
		      }		
     function delete_cmshme()  
      {  
           $this->load->model("Property_model");  
           $this->Property_model->delete_cmshme($_POST["user_id"]);  
           echo 'Deleted Successfully';  
      } 

      function add_Aboutcms(){

      	 if (isset($_POST['submit'])) {
      	 $title = $this->input->post('title');
         $subtitle = $this->input->post('subtitle');
         $editor1 = $this->input->post('editor1');
         $list = implode(',',$this->input->post('name'));
        // $list  = json_encode($this->input->post('name'));
         $config = array(
			 'upload_path' => './uploads/',
			 'allowed_types' => 'jpg|jpeg|png|bmp|gif',
			 'max_size' => 0,
			 'filename' => url_title($this->input->post('file')),
			 );
			 $this->load->library('upload');
			 $this->upload->initialize($config);
                         if ($this->upload->do_upload('file')) { }
                         
        $name_array = array();
        $count = count($_FILES['userfile']['size']);
        foreach($_FILES as $key=>$value)
        for($s=0; $s<=$count-1; $s++) {
        $_FILES['userfile']['name']   =     $value['name'][$s];
        $_FILES['userfile']['type']    = $value['type'][$s];
        $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
        $_FILES['userfile']['error']       = $value['error'][$s];
        $_FILES['userfile']['size']    = $value['size'][$s];   
            $config2['upload_path'] = './uploads/';
            $config2['allowed_types'] = 'gif|jpg|png';
            $config2['max_size']    = '0';
            $config2['max_width']  = '0';
            $config2['max_height']  = '0';
        // $this->load->library('upload', $config);
         //   $this->load->library('upload');
        $this->upload->initialize($config2);
        $this->upload->do_upload();
        $data = $this->upload->data();
        $name_array[] = $data['file_name'];
            }
            $names= implode(',', $name_array);                 
                         
                         
						
					  

                                           



//					   $data[] = array(
//				                            'abt_title' => $title,
//				                            'abt_subtitle'    => $subtitle,
//				                            'abt_descp'  => $editor1,
//				                            'abt_image' =>$this->upload->file_name,
//				                            'abt_list' => $list,
//                                                            'abt_slider'  => $names
//                                                            
//
//				                     );
//                                           
                 $i = 0;
                 if ($i == 0) {

                 $insert_array = array(
                                                            'abt_title' => $title,
				                            'abt_subtitle'    => $subtitle,
				                            'abt_descp'  => $editor1,
				                            'abt_image' =>$this->upload->file_name,
				                            'abt_list' => $list,
                                                            'abt_slider'  => $names
                  );

                $insert[] = $insert_array;
                
                }  
             
                                     
                                           
                                           
                                           
                                           
                                           
                                           
			    $this->load->model('Property_model');  
                            $this->Property_model->addcmsAbout($insert);  
                   echo $this->db->last_query(); 
                echo "<script>alert('Added Successfully');window.location='".base_url()."Cms_about';</script>"; 

      }
  }


  			function get_cmsAbout(){

			$data  =	$this->Property_model->get_cmsAbout();
			$output = ' 
			<table class="table table-bordered table-striped table_data">
			<thead>
						<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Sub Title</th>
						<th>Description</th>
						<th>List</th>
						<th>Actions</th>
						</tr>
			</thead>
			<tbody>
			';
			
                            
                                   
			
			foreach($data->result() as $row)
			{
				$id = $row->abt_id;
				//$list_array = $row->abt_list;
				//$list = json_decode($row->abt_list, TRUE);
			$output .= '	
			
			<tr>
			<td>'.$id.'</td>
			<td>'.$row->abt_title.'</td>
			<td>'.$row->abt_subtitle.'</td>
			<td>'.$row->abt_descp.'</td>
			
			
			<td>'.$row->abt_list.'</td>
			<td class="box-tools">
			<a href="View_cmsAbout?id='.$id.'"  class="btn btn-app btn-sm" >  <i class="fa fa-eye"></i></a>
			<a href="Edit_cmsAbout?id='.$id.'" class="btn btn-app btn-sm"><i class="fa fa-edit"></i></a>
			<a name="delete"  id="'.$id.'"  class="btn btn-app btn-sm delete" >  <i class="fa fa-times"></i></a>
			 
		 </td>
			';
			}
				
		

				  
				  $output .= ' </tbody>	</table>';
				
				  echo $output;
						 
		   }


          function view_cmsAbout(){

		 $id = $_GET['id'];
	   $abt  = $this->db->query("SELECT * FROM `cms_about` WHERE `abt_id`='$id'")->row_array();
	 
	      $output ='
		
			<tr>
			   <td><b>Title</b></td>
			   <td>'.$abt['abt_title'].'</td>
			</tr>
			<tr>
			   <td><b>Sub Title</b></td>
			   <td>'.$abt['abt_subtitle'].'</td>
			</tr>
			<tr>
			   <td style="vertical-align:middle"><b>Description</b></td>
			   <td>'.$abt['abt_descp'].'</td>
			  
			</tr>
            <tr>
			   <td style="vertical-align:middle"><b>List</b></td>
			   <td>'.$abt['abt_list'].'</td>
			  
			</tr>
 
			';

			echo  $output;

          }
          function update_cmsAbout(){
		      		$id = $_GET['id'];
				
					  $updated_data = array(  
                        'home_title'    =>     $this->input->post('title'),  
                        'home_subtitle'           =>     $this->input->post('subtitle'),
                         'home_description'           =>     $this->input->post('editor1')  
                       );
               
              
                $this->load->model('Property_model');  
                $this->Property_model->update_cmsHome($id, $updated_data);  
               // echo $this->db->last_query(); 
                echo "<script>alert('Updated Successfully');window.location='".base_url()."Cms_home';</script>";

		      }
		

         		 function cmsabt_fecthing(){

                     $id = $_GET['id'];	
					 $data  =	$this->Property_model->cmsabt_fecthing($id);
				   // echo  $output['query'] = $this->db->last_query();
					foreach($data as $row)  
					{  

						 $output['abt_title'] = $row->abt_title;  
						 $output['abt_subtitle'] = $row->abt_subtitle;
					     $output['abt_descp'] = $row->abt_descp;
					     $output['abt_image'] = $row->abt_image;
					     $output['abt_list'] = $row->abt_list;
					}  
					echo json_encode($output);  
					 
		      }		

		       function client_fecthing(){

                     $id = $_GET['id'];	
					 $data  =	$this->Property_model->client_fecthing($id);
				   // echo  $output['query'] = $this->db->last_query();
					foreach($data as $row)  
					{  

						 $output['client_name'] = $row->client_name;  
						 $output['client_descrp'] = $row->client_descrp;
					     $output['client_desg'] = $row->client_desg;
					    // $output['abt_image'] = $row->abt_image;
					    // $output['abt_list'] = $row->abt_list;
					}  
					echo json_encode($output);  
					 
		      }		



           function delete_cmsAbout()  
      {  
           $this->load->model("Property_model");  
           $this->Property_model->delete_cmsAbout($_POST["user_id"]);  
           echo 'Deleted Successfully';  
      } 
      function delete_client()  
      {  
           $this->load->model("Property_model");  
           $this->Property_model->delete_client($_POST["user_id"]);  
           echo 'Deleted Successfully';  
      } 



     function add_Contactcms(){

    if (isset($_POST['submit'])) {
    	 $Address = $this->input->post('editor1');
         $email = $this->input->post('email');
         $phno = implode(',',$this->input->post('name'));
         	  

         	   $data[] = array(
                          'cnt_address' => $Address,
                            'cnt_email'    => $email,
                           'cnt_phno'  => $phno,
                           
                            
                     );

       $this->Property_model->add_Contactcms($data);
       echo "<script>alert('Created Successfully');window.location='".base_url()."Cms_Contact';</script>";
    }

   }




   		 function get_cmsContact(){

			$data  =	$this->Property_model->get_cmsContact();
			$output = ' 
			<table class="table table-bordered table-striped table_data">
			<thead>
						<tr>
						<th>ID</th>
						<th>Address</th>
						<th>Email</th>
						<th>Phone Number</th>
						<th>Actions</th>
						</tr>
			</thead>
			<tbody>
			';
			
                            
                                   
			
			foreach($data->result() as $row)
			{
				$id = $row->cms_contact_id;
			$output .= '	
			
			<tr>
			<td>'.$id.'</td>
			<td>'.$row->cnt_address.'</td>
			<td>'.$row->cnt_email.'</td>
			<td>'.$row->cnt_phno.'</td>
			<td class="box-tools">
			<a href="Edit_cmsContact?id='.$id.'" class="btn btn-app btn-sm"><i class="fa fa-edit"></i></a>
			<a name="delete"  id="'.$id.'"  class="btn btn-app btn-sm delete" >  <i class="fa fa-times"></i></a>
			 
		 </td>
			';
			}
				
		

				  
				  $output .= ' </tbody>	</table>';
				
				  echo $output;
	

				//  foreach($data->result() as $row1){
				// 	echo "ID ".$row1->location_id."<br>";
				// 	echo  "Location ".$row1->location_title."<br>";
				// 	echo  "Type ".$row1->property_type."<br>";
				//  }
					 
		   }		


		    function fetch_cmsCnt(){

                     $id = $_GET['id'];	
					 $data  =	$this->Property_model->fetch_cmsCnt($id);
				
					foreach($data as $row)  
					{  
						 $output['cnt_address'] = $row->cnt_address;  
						 $output['cnt_email'] = $row->cnt_email;

					     $output['cnt_phno'] = $row->cnt_phno;
					}  
					echo json_encode($output);  
					 
		      }		



		        function update_cmsContact(){
		      		$id = $_GET['id'];
				   $phno =  implode(',',$this->input->post('name'));
					  $updated_data = array(  
                        'cnt_address'    =>     $this->input->post('editor1'),  
                        'cnt_email'           =>     $this->input->post('email'),
                         'cnt_phno'           =>     $phno 
                       );
               
              
                $this->load->model('Property_model');  
                $this->Property_model->update_cmsContact($id, $updated_data);  
               // echo $this->db->last_query(); 
                echo "<script>alert('Updated Successfully');window.location='".base_url()."Cms_Contact';</script>";

		      }

		       function delete_cmsContact()  
      {  
           $this->load->model("Property_model");  
           $this->Property_model->delete_cmsContact($_POST["user_id"]);  
           echo 'Deleted Successfully';  
      } 



       function sliders1(){
        $data = array();
      echo   $this->input->post('name');  
      echo $this->input->post('editor1');
      // echo implode(',',$this->input->post('files'));
               
        // If file upload form submitted
      // echo ($_FILES['files']['name']);
        if($this->input->post('fileSubmit')){
            $filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];
                
                // File upload configuration
                $uploadPath = './uploads/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                
                // Load and initialize upload library
                 $this->load->library('upload');
				 $this->upload->initialize($config);
                // $this->load->library('upload', $config);
                // $this->upload->initialize($config);
                
                // Upload file to server
                if($this->upload->do_upload('files')){
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                }
            }
            
            if(!empty($uploadData)){
                // Insert files data into the database
                 $updated_data = array(  
                        'slider_name'    =>     $this->input->post('name'),  
                        'slider_decription'           =>     $this->input->post('editor1'),
                         'slider_image'           =>     $uploadData 
                       );
               
                $insert = $this->file->insert_slider($updated_data);
                
                // Upload status message
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
            }
        }else{
        	echo "Error";
        }
       
    }

    function sliders(){
    	
    
    	echo $title = $this->input->post('name');
        echo $Description = $this->input->post('editor1');
      echo  $a=$this->input->post('file');
      //  echo $file = implode(',',$this->input->post('file'));
        $image = implode(',', (array) $a);
       print_r($image);
         	  
           $config = array(
							'upload_path' => './uploads/',
							'allowed_types' => 'jpg|jpeg|png|bmp',
							'max_size' => 0,
							
							'filename' => url_title($this->input->post('file')),
			              );
			          $this->load->library('upload');
					  $this->upload->initialize($config);
		  
					  if ($this->upload->do_upload('file')) {
						
					  } 

       //   	   $data[] = array(
       //                    'slider_name' => $title,
       //                      'slider_decription'    => $Description,
       //                     'slider_image'  => $image,
                           
                            
       //               );

       // $this->Property_model->insert_slider($data);
       // echo "<script>alert('Created Successfully');window.location='".base_url()."Slider';</script>";
       }

           function sliders_add(){
    	
    
    	 $title = $this->input->post('name');
         $Description = $this->input->post('editor1');
     // echo  $a=$this->input->post('file');
      //  echo $file = implode(',',$this->input->post('file'));
       //  $image = implode(',', (array) $a);
       // print_r($image);
        $name_array = array();
        $count = count($_FILES['userfile']['size']);
        foreach($_FILES as $key=>$value)
        for($s=0; $s<=$count-1; $s++) {
        $_FILES['userfile']['name']=$value['name'][$s];
        $_FILES['userfile']['type']    = $value['type'][$s];
        $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
        $_FILES['userfile']['error']       = $value['error'][$s];
        $_FILES['userfile']['size']    = $value['size'][$s];   
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']    = '100';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
        // $this->load->library('upload', $config);
            $this->load->library('upload');
		   $this->upload->initialize($config);
        $this->upload->do_upload();
        $data = $this->upload->data();
        $name_array[] = $data['file_name'];
            }
            $names= implode(',', $name_array);
            //$this->load->database();
    //         $db_data = array(

    //         	'id'=> NULL,
    //                          'name'=> $names);
    //     $this->db->insert('testtable',$db_data);
           
    // print_r($names);

      $data1[] = array( 'titlle' => $title,
                            'description'    => $Description,
                           'img'  => $names
                            
                     );

        $this->Property_model->gallery($data1);
        //echo $this->db->last_query(); 
        echo "<script>alert('Created Successfully');window.location='".base_url()."Slider';</script>";






              }

     

      function get_slider(){

			$data  =	$this->Property_model->get_slider();
			$output = ' 
			<table class="table table-bordered table-striped table_data">
			<thead>
						<tr>
						<th>ID</th>
						<th>Slider Title</th>
						<th>Slider Decription</th>
						<th>Images</th>
						<th>Actions</th>
						</tr>
			</thead>
			<tbody>
			';
			
                            
                                   
			
			foreach($data->result() as $row)
			{
				$id = $row->gallery_id;
			$output .= '	
			
			<tr>
			<td>'.$id.'</td>
			<td>'.$row->titlle.'</td>
			<td>'.$row->description.'</td>
			<td>'.$row->img.'</td>
			<td class="box-tools">
			<a href="View_location?id='.$id.'"  class="btn btn-app btn-sm" >  <i class="fa fa-eye"></i></a>
			<a href="Edit_slider.php?id='.$id.'" class="btn btn-app btn-sm"><i class="fa fa-edit"></i></a>
			<a name="delete"  id="'.$id.'"  class="btn btn-app btn-sm delete" >  <i class="fa fa-times"></i></a>
			 
		 </td>
			';
			}
				
		

				  
				  $output .= ' </tbody>	</table>';
				
				  echo $output;
	

				//  foreach($data->result() as $row1){
				// 	echo "ID ".$row1->location_id."<br>";
				// 	echo  "Location ".$row1->location_title."<br>";
				// 	echo  "Type ".$row1->property_type."<br>";
				//  }
					 
		   }		


				 function fetch_slider(){

                     $id = $_GET['id'];	
					 $data  =	$this->Property_model->fetch_slider($id);
				
					foreach($data as $row)  
					{  
						 $output['titlle'] = $row->titlle;  
						 $output['description'] = $row->description;
						 //$output['img'] = $row->img;
						 // $slider_image = explode(',', $row->img);
						  if($row->img != '')  
                {  
                	foreach (explode(',', $row->img) as $slide_img) {
                		$output['img'] = '<img src="'.base_url().'uploads/'.$slide_img.'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_user_image" value="'.$slide_img.'" />';  
                	}
                     
                }  
                else  
                {  
                     $output['img'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }  

					
					}  
					echo json_encode($output);  
					 
		      }	
		         function update_slider(){
		      		$id = $_GET['id'];
		      		$upadte_id = $this->input->post("upadte_id");
		      		 $title =  $this->input->post('title');
		      		 $Decription = $this->input->post('editor1');
				
					  $updated_data = array(  
                        'titlle'    =>    $title, 
                        'description'  => $Decription,  
                       );
               
              
                $this->Property_model->update_slider($upadte_id, $updated_data);  
                //echo $this->db->last_query(); 
                echo "<script>alert('Updated Successfully');window.location='".base_url()."Slider';</script>";

		      }
		        function delete_slider()  
      {  
           
           $this->Property_model->delete_slider($_POST["user_id"]);  
         //  echo $this->db->last_query(); 
           echo 'Deleted Successfully';  
      } 
     function add_topFeature(){
       $location_id =$this->input->post('titleSelect');
       $protype =$this->input->post('property_type');
     
        // $sql = $this->db->query("INSERT INTO top_featured(location_id,property_type) VALUES ('".$location_id."','".$protype."')");
        // $this->db->query($sql);


       	    $title =$this->input->post('titleSelect');
			$property_type =  $this->input->post('property_type');
			
		
			
			$data[] = array(
						 'location_id' =>  $title,					
						 'property_type'    => $property_type,
												
						);
 
			$this->Property_model->insert_feature($data);
			echo '<script>alert(" Added Successfully");window.location="'.base_url().'Index";</script>';
	  

     }
      function get_topFeature($place){
               
			$data  =	$this->Property_model->get_topFeature($place);
			
			$output = ' 
			<table class="table table-bordered table-striped table_data">
			<thead>
						<tr>
						<th>ID</th>
						<th>Location Title</th>
						
						<th>Actions</th>
						</tr>
			</thead>
			<tbody>
			';
			
                            
                                   
			
			foreach($data->result() as $row)
			{
				$location =  $row->location_id;
				$id = $row->top_id;
		  $location = $this->db->query("SELECT * FROM `locations` WHERE `location_id`='$location'")->row_array();
			$output .= '	
			
			<tr>
			<td>'.$id.'</td>
			<td>'.$location['location_title'].'</td>
			
			
			<td class="box-tools">
			
			<a name="delete"  id="'.$id.'"  class="btn btn-app btn-sm delete" >  <i class="fa fa-times"></i></a>
			 
		 </td>
			';
			}
				
		

				  
				  $output .= ' </tbody>	</table>';
				
				  echo $output;
	

				//  foreach($data->result() as $row1){
				// 	echo "ID ".$row1->location_id."<br>";
				// 	echo  "Location ".$row1->location_title."<br>";
				// 	echo  "Type ".$row1->property_type."<br>";
				//  }
					 
		   }		

		   function delete_topFeature()  
      {  

           $this->Property_model->delete_topFeature($_POST["user_id"]);  
           echo 'Deleted Successfully';  
      }  
		   

			function showOwner(){
	         	$protype = $_GET['protype'];
	   //       		$data1  =	$this->Property_model->fetch_location_protype($protype)->result();
	

			 // echo $this->db->last_query(); 
	         				// $data =	$this->db->query("SELECT * FROM prop_ownerdetails WHERE location_id='".$place_id."'")->row_array();
              //           		 echo $this->db->last_query(); 
           	  $output = ' 
			<table class="table table-bordered table-striped">
			<thead>
						<tr>
						<th>ID</th>
						<th>Location Name</th>
						<th>Owner Name</th>
						<th>Mobile No</th>
						<th>Tel No</th>
						<th>Email</th>
						<th>Property Type</th>
						<th>Actions</th>
						
						</tr>
			</thead>
			<tbody>';
		$sql = 	 $this->db->query("SELECT * FROM `locations` WHERE `property_type`='".$protype ."'")->result();
		// $sql['location_id'];
		// $sql['location_title'];
		// echo $this->db->last_query(); 
		foreach ($sql as $row) {
			
	    $sql1 =	$this->db->query("SELECT * FROM prop_ownerdetails WHERE location_id='".$row->location_id."'")->result();
        // echo $this->db->last_query(); 
         foreach ($sql1 as $key => $row1) {
         	$output .= ' 	<tr>
			<td>'.$row->location_id.'</td>
			<td>'.$row->location_title.'</td>
			<td>'.$row1->own_name.'</td>
			<td>'.$row1->own_mbno.'</td>
			<td>'.$row1->own_telno.'</td>
			<td>'.$row1->own_email.'</td>
			
			
			<td>'.$row1->own_descp.'</td>
			<td class="box-tools">
	
			<a href="View_owner?id='.$row1->owner_id.'"  class="btn btn-app btn-sm" >  <i class="fa fa-eye"></i></a>
			<a href="Edit_OwnerDetails.php?id='.$row1->owner_id.'" class="btn btn-app btn-sm"><i class="fa fa-edit"></i></a>
			<a name="delete"  id="'.$row1->owner_id.'"  class="btn btn-app btn-sm delete" >  <i class="fa fa-times"></i></a>

		 </td>
			</tr>
			';
         }


		
			 }
				
		

				  
				  $output .= ' </tbody>	</table>';
				
				  echo $output;
	






			


		   }	


		      function add_client(){
      	
      	 $name = $this->input->post('name');
        
         $editor1 = $this->input->post('editor1');
         $desgn = $this->input->post('desgn');
        // $list = implode(',',$this->input->post('name'));
        // $list  = json_encode($this->input->post('name'));

           $config = array(
							'upload_path' => './uploads/',
							'allowed_types' => 'jpg|jpeg|png|bmp',
							'max_size' => 0,
							
							'filename' => url_title($this->input->post('file')),
			              );
			          $this->load->library('upload');
					  $this->upload->initialize($config);
		  
					  if ($this->upload->do_upload('file')) {
						
					  } 
					   $data[] = array(
				                          'client_name' => $title,
				                            'client_descrp'    => $editor1,
				                           'client_desg'  => $desgn,
				                           'client_img' =>$this->upload->file_name,
				                           
				                            
				                     );
					    $this->load->model('Property_model');  
                $this->Property_model->addclient($data);  
               // echo $this->db->last_query(); 
                echo "<script>alert('Added Successfully');window.location='".base_url()."Cms_about';</script>"; 

      
  }
	   function client_add(){

      echo	 $name = $this->input->post('name');
        
       echo  $editor1 = $this->input->post('editor1');
      echo   $desgn = $this->input->post('desgn');
	   }
	      function add_client1(){
      
      	 if (isset($_POST['submit'])) {
      	 $name = $this->input->post('name');
         $desgn = $this->input->post('desgn');
         $editor1 = $this->input->post('editor1');
         //$list = implode(',',$this->input->post('file'));
        // $list  = json_encode($this->input->post('name'));

           $config = array(
							'upload_path' => './uploads/',
							'allowed_types' => 'jpg|jpeg|png|bmp',
							'max_size' => 0,
							
							'filename' => url_title($this->input->post('file')),
			              );
			          $this->load->library('upload');
					  $this->upload->initialize($config);
		  
					  if ($this->upload->do_upload('file')) {
						
					  } 




					   $data[] = array(
				                            'client_name' => $name,
				                            'client_desg'    => $desgn,
				                            'client_descrp'  => $editor1,
				                            'client_img' =>$this->upload->file_name
				                            

				                     );
			    $this->load->model('Property_model');  
                $this->Property_model->addclient1($data);  
               //echo $this->db->last_query(); 
                echo "<script>alert('Added Successfully');window.location='".base_url()."Client_says';</script>"; 

      }
  }

  function get_client(){

			$data  =	$this->Property_model->get_client();
			$output = ' 
			<table class="table table-bordered table-striped table_data">
			<thead>
						<tr>
						<th>ID</th>
						<th>Client Name</th>
						<th>Designation</th>
						<th>Description</th>
						
						<th>Actions</th>
						</tr>
			</thead>
			<tbody>
			';
			
                            
                                   
			
			foreach($data->result() as $row)
			{
				$id = $row->client_id;
				//$list_array = $row->abt_list;
				//$list = json_decode($row->abt_list, TRUE);
			$output .= '	
			
			<tr>
			<td>'.$id.'</td>
			<td>'.$row->client_name.'</td>
			<td>'.$row->client_desg.'</td>
			<td>'.$row->client_descrp.'</td>
			
			
			
			<td class="box-tools">
			
			<a href="Edit_client?id='.$id.'" class="btn btn-app btn-sm"><i class="fa fa-edit"></i></a>
			<a name="delete"  id="'.$id.'"  class="btn btn-app btn-sm delete" >  <i class="fa fa-times"></i></a>
			 
		 </td>
			';
			}
				
		

				  
				  $output .= ' </tbody>	</table>';
				
				  echo $output;
						 
		   }



		   	 function update_client(){
		      		$id = $_GET['id'];
				
					  $updated_data = array(  
                        'client_name'    =>     $this->input->post('name'),  
                        'client_desg'           =>     $this->input->post('desgn'),
                         'client_descrp'           =>     $this->input->post('editor1')  
                       );
               
              
                $this->load->model('Property_model');  
                $this->Property_model->update_client($id, $updated_data);  
               // echo $this->db->last_query(); 
                echo "<script>alert('Updated Successfully');window.location='".base_url()."Client_says';</script>";

		      }
                      
        function Banner_add(){
    	
    
    	 $title = $this->input->post('name');
         $Description = $this->input->post('editor1');
    
            $name_array = array();
            $count = count($_FILES['userfile']['size']);
            foreach($_FILES as $key=>$value)
            for($s=0; $s<=$count-1; $s++) {
            $_FILES['userfile']['name']=$value['name'][$s];
            $_FILES['userfile']['type']    = $value['type'][$s];
            $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
            $_FILES['userfile']['error']       = $value['error'][$s];
            $_FILES['userfile']['size']    = $value['size'][$s];   

                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp';
                $config['max_size']    = '0';
                $config['max_width']  = '0';
                $config['max_height']  = '0';
            // $this->load->library('upload', $config);
                $this->load->library('upload');
                       $this->upload->initialize($config);
            $this->upload->do_upload();
            $data = $this->upload->data();
            $name_array[] = $data['file_name'];
                }
                $names= implode(',', $name_array);
           
            $data1[] = array( 'banner_title' => $title,
                                  'banner_description'    => $Description,
                                 'banner_images'  => $names

                           );

           $this->Property_model->banner_img($data1);
        //echo $this->db->last_query(); 
        echo "<script>alert('Created Successfully');window.location='".base_url()."Banner_slider';</script>";






              }
     
                function get_banner(){

			$data  =	$this->Property_model->get_banner();
			$output = ' 
			<table class="table table-bordered table-striped table_data">
			<thead>
						<tr>
						<th>ID</th>
						<th>Banner Title</th>
						<th>Banner Decription</th>
						
						<th>Actions</th>
						</tr>
			</thead>
			<tbody>
			';
			
                            
                                   
			
			foreach($data->result() as $row)
			{
				$id = $row->banner_id;
			$output .= '	
			
			<tr>
			<td>'.$id.'</td>
			<td>'.$row->banner_title.'</td>
			<td>'.$row->banner_description.'</td>
			
			<td class="box-tools">
			<a href="View_banner?id='.$id.'"  class="btn btn-app btn-sm" >  <i class="fa fa-eye"></i></a>
			<a href="Edit_banner.php?id='.$id.'" class="btn btn-app btn-sm"><i class="fa fa-edit"></i></a>
			<a name="delete"  id="'.$id.'"  class="btn btn-app btn-sm delete" >  <i class="fa fa-times"></i></a>
			 
		 </td>
			';
			}
				
		

				  
				  $output .= ' </tbody>	</table>';
				
				  echo $output;
	

				//  foreach($data->result() as $row1){
				// 	echo "ID ".$row1->location_id."<br>";
				// 	echo  "Location ".$row1->location_title."<br>";
				// 	echo  "Type ".$row1->property_type."<br>";
				//  }
					 
		   }
               function  view_banner(){ 

		 $id = $_GET['id'];
	         $banner  = $this->db->query("SELECT * FROM `banner` WHERE `banner_id`='$id'")->row_array();
	           //$directory = "'.base_url().'uploads/";
                 $img = explode(",", $banner['banner_images']);
                  // $img = $banner['banner_images'];
	      $output ='
		
			<tr>
			   <td><b>Banner Title</b></td>
			   <td>'.$banner['banner_title'].'</td>
			</tr>
			<tr>
			   <td><b>Banner Description</b></td>
			   <td>'.$banner['banner_description'].'</td>
			</tr>
                        
			';
                 foreach($img as $img_all) {
                   $img_all = trim($img_all);
                  $output .='    <tr>
                      <td>Slider Images</td>
                     
                      <td><img src="'.base_url().'uploads/'.$img_all.'" alt="no image" width="50" height="50"/> </td>
                       </tr>  ';
                }

                      

			echo  $output;
		 }    
               
                 
                 
	     function fetch_banner(){

                     $id = $_GET['id'];	
					 $data  =	$this->Property_model->fetch_banner($id);
				
					foreach($data as $row)  
					{  
						 $output['banner_title'] = $row->banner_title;  
						 $output['banner_description'] = $row->banner_description;
					         $img = explode(",", $row->banner_images);
						  if($row->banner_images != '')  
                {  

                        
             foreach($img as $img_all) {
                   $img_all = trim($img_all);
                  $output['img'] ='<img src="'.base_url().'uploads/'.$img_all.'" alt="no image" width="50" height="50"/> 
                        ';
                  }
                     
                }  
                else  
                {  
                     $output['img'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }  

					
					}  
					echo json_encode($output);  
					 
		      }	
                      
                      
        function update_banner(){
		      		$id = $_GET['id'];
		      		$upadte_id = $this->input->post("upadte_id");
		      		 $title =  $this->input->post('title');
		      		 $Decription = $this->input->post('editor1');
				
			  $updated_data = array(  
                                'banner_title'    =>    $title, 
                                'banner_description'  => $Decription,  
                           );
              
                $this->Property_model->update_banner($upadte_id, $updated_data);  
                echo "<script>alert('Updated Successfully');window.location='".base_url()."Banner_slider';</script>";

	 }
         
         
      function delete_banner()  
      {  
           $this->Property_model->delete_banner($_POST["user_id"]);  
           echo 'Deleted Successfully';  
      }             
                      
}
