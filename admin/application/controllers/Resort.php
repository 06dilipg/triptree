<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
    {
          parent::__construct();

          $this->load->helper(array('form', 'url'));
          $this->load->model('Property_model');
      
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
		   $location_title =$this->input->post('titleSelect');
		   $PropertyName =  $this->input->post('PropertyName');
		   $OwnerName =  $this->input->post('OwnerName');
		   $Email =  $this->input->post('Email');
		   $mobno =  $this->input->post('mobno');
		   $Telno =  $this->input->post('Telno');
		   $editor1 =  $this->input->post('editor1');
		   $editor2 =  $this->input->post('editor2');
		   $editor3 =  $this->input->post('editor3');
		   
		   $data[] = array(
						'location_title' =>  $location_title,					
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
		   echo '<script>alert(" Added Successfully");window.location="'.base_url().'Homestay";</script>';
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
   
		  $config = array(
			'upload_path' => './uploads/',
			'allowed_types' => 'jpg|jpeg|png|bmp',
			'max_size' => 0,
			// 'filename' => $this->session->userdata('school_id').$class.$subid.url_title($this->input->post('file')),
			'filename' => url_title($this->input->post('file')),
			// 'encrypt_name' => true
		  );
		  // $this->load->library('upload', $config);
	  
		  $this->load->library('upload');
		  $this->upload->initialize($config);
		  
		  if ($this->upload->do_upload('file')) {
			
		  }
		$data[] = array(
					 'owner_id' =>  $titleSelect,					
					 'Aboutpro'    => $AboutProperty,
					 'Pro_includes' => $Pro_includes,
					 'Pro_cuisine'    => $Pro_cuisine,
					 'Pro_activites' => $Pro_activites,
					 'Pro_getting'    => $Pro_getting,
					 'Pro_distance' => $Pro_distance,
					 'Pro_around'    => $Pro_around,
					 'Pro_terms' => $Pro_terms,
					 'Pro_service' => json_encode(implode(",", $Pro_service)),
					 'Pro_images' => $this->upload->file_name
					);

		$this->Property_model->insert_proDetails($data);
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
		  
		
		
		function get_OwnerDetails(){

			$data  =	$this->Property_model->select_Owner();
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
			
                            
                                   
			
			foreach($data->result() as $row)
			{
				$id = $row->owner_id;
			$output .= '	
			
			<tr>
			<td>'.$id.'</td>
			<td>'.$row->own_name.'</td>
			<td>'.$row->own_mbno.'</td>
			<td>'.$row->own_telno.'</td>
			<td>'.$row->own_email.'</td>
			<td>'.$row->own_descp.'</td>
			<td class="box-tools">
			<a href="View_owner?id='.$id.'"  class="btn btn-app btn-sm" >  <i class="fa fa-eye"></i></a>
			<a href="Edit_OwnerDetails.php?id='.$id.'" class="btn btn-app btn-sm"><i class="fa fa-edit"></i></a>
			<a name="delete"  id="'.$id.'"  class="btn btn-app btn-sm delete" >  <i class="fa fa-times"></i></a>
		 </td>
			</tr>
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
		     
			$data  =	$this->Property_model->select_Owner();
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
						 'pro_id' =>  $PropertyType,					
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
				$PropertyName  = $this->db->query("SELECT prop_name FROM prop_ownerdetails WHERE owner_id= '$row->pro_id'")->row_array();
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
		
			 $output ='
		   
			   <tr>
				  <td><b>Location Title</b></td>
				  <td>'.$owner['location_title'].'</td>
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
				
					foreach($data as $row)  
					{  
						 $output['location_title'] = $row->location_title;  
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
                      'location_title'    =>     $this->input->post('titleSelect'),  
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








}
