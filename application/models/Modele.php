<?php
 
class Modele extends CI_Model
{
	// vient pour chaque page
	 public function __construct()
  {
			 parent::__construct();
			 $this->load->database();
  }
  
//fait
   public function listnongarde() {
         $this->db->select('*'); 
         // table pharmacies   
         $this->db->from('pharmacies');
          $this->db->where('garde',"0");
         // revient pour chaque page
         $query = $this->db->get();
         return $query->result();
        }
         public function listgarde() {
         $this->db->select('*'); 
         // table pharmacies   
         $this->db->from('pharmacies');
         $this->db->where('garde',"1");
         // revient pour chaque page
         $query = $this->db->get();
         return $query->result();
        }

//fait
 public function listvendeuse() {
         $this->db->select('*'); 
         // table vendeurs   
         $this->db->from('vendeurs');
          $this->db->join('pharmacies','pharmacies.id=id_pharmacies'); 
         // vient pour chaque page
         $query = $this->db->get();
         return $query->result();
        }

//deja f3
     public function listmedicament() {
         $this->db->select('*');    
         $this->db->from('medicaments');
         $query = $this->db->get();
         return $query->result();
        }
//fe
        public function listmedica($med) {
         $this->db->select('*');    
         $this->db->from('medicaments');
         $this->db->join('stocks','id_medicament=medicaments.id'); 
         $this->db->join('pharmacies','id_pharmacies=pharmacies.id'); 
         $this->db->where('libelle_medicament',$med);
         $query = $this->db->get();
         return $query->result();
      }

    public function listipm($ipm) {
         $this->db->select('*');    
         $this->db->from('ipm');
         $this->db->join('veriipm','id_ipm=ipm.id'); 
         $this->db->join('pharmacies','pharmacies.id=id_pharmacie'); 
         $this->db->where('ipm.libelle',$ipm);
         $query = $this->db->get();
         return $query->result();
        }

        public function Recherchemedicos($nomMedicament) {
    $this->db->select('id'); // Sélectionne uniquement l'ID pour optimisation
    $this->db->from('medicaments'); // Nom de votre table des médicaments
    $this->db->where('libelle_medicament', $nomMedicament); // Vérifie si le nom existe
    $query = $this->db->get();
    return $query->result();

    return $query->num_rows() > 0; // Retourne true si au moins un résultat est trouvé
}

   public function listeMed($typ,$ville) {
         $this->db->select('*');    
         $this->db->from('medecin');
         $this->db->join('villes','id_ville=ville_med'); 
         $this->db->join('type-medecin','id_tm=type_med'); 
         $this->db->where('nom_tm',$typ);
         $this->db->where('nom_ville',$ville);
         $query = $this->db->get();
         return $query->result();
        }
      public function listeMed2($typ) {
         $this->db->select('*');    
         $this->db->from('medecin');
         $this->db->join('villes','id_ville=ville_med'); 
         $this->db->join('type-medecin','id_tm=type_med'); 
         $this->db->where('id_tm',$typ);
         $query = $this->db->get();
         return $query->result();
        }


    
    
      public  function insertion($data,$tables){
           $this->db->insert($tables, $data);
         }
    
       public function updates($data,$tables,$id,$ids){
				$this->db->where($ids, $id);
				$this->db->update($tables, $data);
			
				}
}
?>
