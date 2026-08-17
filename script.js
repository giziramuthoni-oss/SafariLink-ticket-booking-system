document.getElementById("bookingForm").addEventListener("submit", function(event) {

    let PassengerName=document.getElementById("name").value;
    let phone=document.getElementById("phone").value;
    let seats=document.getElementById("seats").value;

    if(PassengerName=="" || phone==""){
        alert("Please fill in all required fields.");
        event.preventDefault();
    }

    if(seats<= 0){
        alert("Please enter a valid seat number.");
        event.preventDefault();
    }
});
