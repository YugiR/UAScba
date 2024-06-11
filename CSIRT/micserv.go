package main

func getDetailadmin(w http.ResponseWriter, r *http.Request){

	w.Header().Set("Content-Type", "application/json")
	json.NewEncoder(w).Encode(map[string]string("Nama": "Yugi Raihan", "NIM": "2214000005", "Team": "Red Team"))
}

func getalluser(w http.ResponseWriter, r *http.Request){
	w.Header().Set("Content-Type", "application/json")
	json.NewEncoder(w).Encode([]map[string]string{
		{
			"Nama":		"Yugi Raihan",
			"NIM":		"2214000005",
			"Team":		"Red Team",
		},
		{
			"Nama":		"Razka Nabiyan",
			"NIM":		"2214000008",
			"Team":		"Forensic Team",
		}
	
	})
}
func main()  {
	
}