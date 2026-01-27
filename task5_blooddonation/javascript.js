const websiteName="Life Drop";
let donorCount=4;
let serialNo = 5; 

console.log(websiteName);
console.log(donorCount);

document.getElementById("siteName").innerText=websiteName;
document.getElementById("donarcount").innerText=donorCount;

function increaseDonor() {
  let name=document.getElementById("dname").value;
  let blood=document.getElementById("dblood").value;
  if (name === "" || blood === "") {
    alert("Please enter donor details");
    return;
  }
  let table=document.getElementById("donorTable");
  let row=table.insertRow(-1);//insert row at end
  let datecell=row.insertCell(0);
  let snoCell=row.insertCell(1);
  let nameCell=row.insertCell(2);
  let bloodcell=row.insertCell(3);
  datecell.innerText=new Date().toLocaleDateString();
  snoCell.innerText=serialNo++;
  nameCell.innerText=name;
  bloodcell.innerText=blood;
   donorCount++;
    document.getElementById("donarcount").innerText="Total Donors: "+donorCount;
    document.getElementById("dname").value="";
  document.getElementById("dblood").values="";

}

let donor={
  name:"Ravi Kumar",
  bloodGroup:"O+",
  city:"Srikakulam",
  available:true,
   toggleAvailability:function(){
    this.available=!this.available;
    document.getElementById("donorStatus").innerText="Donor Available: "+this.available;
  }
};
document.getElementById("donorStatus").innerText =
  "Donor Available: " + donor.available;
