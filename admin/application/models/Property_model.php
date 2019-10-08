<?php
class Property_model extends CI_Model
{
   
    function insert_Location($data){
        $this->db->insert_batch('locations', $data);
    }
    function insert_ownerDetails($data){
        $this->db->insert_batch('prop_ownerdetails', $data);

    }
    function insert_proDetails($data){
        $this->db->insert_batch('property_details', $data);
    }
    function insert_tariff($data){
        $this->db->insert_batch('tariff_plan', $data);
    }

    function select_Location(){
       // $this->db->order_by('location_id', 'DESC');
        $query = $this->db->get('locations');
       return $query;
        
    }
    function selectOwner(){
        
        $query = $this->db->get('prop_ownerdetails');
        return $query;

    }
    function select_Owner($place_id){
        $this->db->where("location_id",$place_id);
        $query = $this->db->get('prop_ownerdetails');
        return $query;

    }
    function select_PropertyDetails(){
        $query = $this->db->get('property_details');
        return $query;
    }

    function select_tariff(){
        $query = $this->db->get('tariff_plan');
        return $query;
    }

    function fetch_property($id){
        $this->db->where("pro_id", $id);  
        $query=$this->db->get('property_details');  
        return $query->result(); 
    }
    function fetch_location($id){
        $this->db->where("location_id", $id);  
        $query=$this->db->get('locations');  
        return $query->result(); 
    }
    function fetch_location_protype($protype){
        $this->db->where("property_type", $protype);  
        $query=$this->db->get('locations');  
        return $query; 
    }
    function fetch_tariff($id){
        $this->db->where("tariffplan_id", $id);  
        $query=$this->db->get('tariff_plan');  
        return $query->result(); 
    } 
     function fetch_owner($id){
        $this->db->where("owner_id", $id);  
        $query=$this->db->get('prop_ownerdetails');  
        return $query->result(); 
    }

    
    function update_Property($id,$updated_data){
             $this->db->where("pro_id", $id);  
             $this->db->update("property_details", $updated_data); 
    }
    function update_Location($id,$updated_data){
             $this->db->where("location_id", $id);  
             $this->db->update("locations", $updated_data); 
    }
    function update_Tariff($id,$updated_data){
             $this->db->where("tariffplan_id", $id);  
             $this->db->update("tariff_plan", $updated_data); 
    }
    function update_Homestay($id,$updated_data){
             $this->db->where("owner_id", $id);  
             $this->db->update("prop_ownerdetails", $updated_data); 
    }

    function delete_location($user_id)  
      {  
           $this->db->where("location_id", $user_id);  
           $this->db->delete("locations");  
           //DELETE FROM users WHERE id = '$user_id'  
      }  
      function delete_property($user_id)  
      {  
           $this->db->where("pro_id", $user_id);  
           $this->db->delete("property_details");  
           //DELETE FROM users WHERE id = '$user_id'  
      } 
       function delete_tariff($user_id)  
      {  
           $this->db->where("tariffplan_id", $user_id);  
           $this->db->delete("tariff_plan");  
         
      }   
      function delete_owner($user_id)  
      {  
           $this->db->where("owner_id", $user_id);  
           $this->db->delete("prop_ownerdetails");           

      }   

      function select_Enquiry($place){
           $this->db->where("property_type", $place);  
         $query =  $this->db->get("enquiry");
           return $query;
      }
       function delete_Enquiry($user_id)  
      {  
           $this->db->where("enquiry_id", $user_id);  
           $this->db->delete("enquiry");           

      } 
       function addcmsHome($data){
        $this->db->insert_batch('cms_home', $data);
    } 
    function get_cmshome(){
       // $this->db->order_by('location_id', 'DESC');
        $query = $this->db->get('cms_home');
       return $query;
        
    }
     function update_cmsHome($id,$updated_data){
             $this->db->where("cms_home_id", $id);  
             $this->db->update("cms_home", $updated_data); 
    }
    function update_client($id,$updated_data){
             $this->db->where("client_id", $id);  
             $this->db->update("client", $updated_data); 
    }
    function fetch_cmshme($id){
        $this->db->where("cms_home_id", $id);  
        $query=$this->db->get('cms_home');  
        return $query->result(); 
    }
        function delete_cmshme($user_id)  
      {  
           $this->db->where("cms_home_id", $user_id);  
           $this->db->delete("cms_home");  
           //DELETE FROM users WHERE id = '$user_id'  
      }  
      function addcmsAbout($insert){
         $this->db->insert_batch('cms_about', $insert);
      }
       function addclient1($data){
         $this->db->insert_batch('client', $data);
      }
       function addclient($data){
         $this->db->insert_batch('client', $data);
      }
       function get_cmsAbout(){
       // $this->db->order_by('location_id', 'DESC');
        $query = $this->db->get('cms_about');
       return $query;
        
    }
     function get_client(){
       // $this->db->order_by('location_id', 'DESC');
        $query = $this->db->get('client');
       return $query;
        
    }

       function cmsabt_fecthing($id){
        $this->db->where("abt_id", $id);  
        $query=$this->db->get('cms_about');  
        return $query->result(); 
    }
    function client_fecthing($id){
        $this->db->where("client_id", $id);  
        $query=$this->db->get('client');  
        return $query->result(); 
    }
        function delete_cmsAbout($user_id)  
      {  
           $this->db->where("abt_id", $user_id);  
           $this->db->delete("cms_about");  
           //DELETE FROM users WHERE id = '$user_id'  
      }
       function delete_client($user_id)  
      {  
           $this->db->where("client_id", $user_id);  
           $this->db->delete("client");  
           //DELETE FROM users WHERE id = '$user_id'  
      }
      function add_Contactcms($data){
         $this->db->insert_batch('cms_contact', $data);
      }

      function get_cmsContact(){
         $query = $this->db->get('cms_contact');
       return $query;
      }
      function fetch_cmsCnt($id){
        $this->db->where("cms_contact_id", $id);  
        $query=$this->db->get('cms_contact');  
        return $query->result(); 

      }
        function update_cmsContact($id,$updated_data){
             $this->db->where("cms_contact_id", $id);  
             $this->db->update("cms_contact", $updated_data); 
    }
      function delete_cmsContact($user_id)  
      {  
           $this->db->where("cms_contact_id", $user_id);  
           $this->db->delete("cms_contact");  
           //DELETE FROM users WHERE id = '$user_id'  
      }  

        function insert_slider($data){
        $insert = $this->db->insert_batch('slider',$data);
       
        }

    function insertUser(){

    }
    function gallery($data){
        $this->db->insert_batch('gallery', $data);
    }
    function get_slider(){
       // $this->db->order_by('location_id', 'DESC');
        $query = $this->db->get('gallery');
       return $query;
        
    }
      function fetch_slider($id){
        $this->db->where("gallery_id", $id);  
        $query=$this->db->get('gallery');  
        return $query->result(); 
    }
        function update_slider($id,$updated_data){
             $this->db->where("gallery_id", $id);  
             $this->db->update("gallery", $updated_data); 
    }

    function delete_slider($user_id)  
      {  
           $this->db->where("gallery_id", $user_id);  
           $this->db->delete("gallery");  
           //DELETE FROM users WHERE id = '$user_id'  
      }  
      function add_topFeature($data){
           $this->db->insert_batch('top_featured', $data);
      }
       function get_topFeature($place){
       // $this->db->order_by('location_id', 'DESC');
        $this->db->where("property_type", $place);  
        $query = $this->db->get('top_featured');
       return $query;
        
    }
    function delete_topFeature($user_id)  
      {  
           $this->db->where("top_id", $user_id);  
           $this->db->delete("top_featured");  
           //DELETE FROM users WHERE id = '$user_id'  
      } 

       function insert_feature($data){
        $this->db->insert_batch('top_featured', $data);
    }

    
     function banner_img($data){
        $this->db->insert_batch('banner', $data);
    }
    function get_banner(){
       // $this->db->order_by('location_id', 'DESC');
        $query = $this->db->get('banner');
       return $query;
        
    }
     function fetch_banner($id){
        $this->db->where("banner_id", $id);  
        $query=$this->db->get('banner');  
        return $query->result(); 
    }
        function update_banner($id,$updated_data){
             $this->db->where("banner_id", $id);  
             $this->db->update("banner", $updated_data); 
    }

    function delete_banner($user_id)  
      {  
           $this->db->where("banner_id", $user_id);  
           $this->db->delete("banner");  
             
      }  
     
}

?>