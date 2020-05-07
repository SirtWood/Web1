function validate()
{
    let name = document.getElementById("userName").value;
    let lastname = document.getElementById("userLastname").value;
    let identification = document.getElementById("userIdentification").value;
    let birthdate = document.getElementById("userBirthdate").value;
    let city = document.getElementById("userCity").value;
    let town = document.getElementById("userTown").value;
    let cellphone = document.getElementById("userCellphone").value;


    if (name === "")
    {
        alert("Please complete name.");
        document.getElementById("userName").style.borderColor = "#ff0000";
        return false;
    }

    if (lastname === "")
    {
        alert("Please complete lastname.");
        document.getElementById("userLastname").style.borderColor = "#ff0000";
        return false;
    }

    if (identification === "")
    {
        alert("Please enter identification number.");
        document.getElementById("userIdentification").style.borderColor = "#ff0000";
        return false;
    }
    else if (identification.length > 10)
    {
        alert("Please no more to 10 charaters.")
        document.getElementById("userIdentification").style.borderColor = "#ff0000";
        return false;  
    }

    if (isNaN(identification))
    {
        alert("Please confirm identification number.");
        document.getElementById("userIdentification").style.borderColor = "#ff0000";
        return false;
    }

    if (birthdate === "")
    {
        alert("Please enter birthdate.");
        document.getElementById("userBirthdate").style.borderColor = "#ff0000";
        return false;
    }

    if (city === "")
    {
        alert("Please enter City.");
        document.getElementById("userCity").style.borderColor = "#ff0000";
        return false;
    }

    if (town === "")
    {
        alert("Please enter Town.");
        document.getElementById("userTown").style.borderColor = "#ff0000";
        return false;
    }

    if (cellphone === "")
    {
        alert("Please enter cellphone number.");
        document.getElementById("userCellphone").style.borderColor = "#ff0000";
        return false;
    }

    if (isNaN(cellphone))
    {
        alert("Please confirm cellphone number.");
        document.getElementById("userCellphone").style.borderColor = "#ff0000";
        return false;
    }


} 


function delalert(delid)
{
    if(confirm("Do you want delete?"))
    {
        window.location.href='delete_appointment.php?id=' + delid + '';
        return true;
    }
    else
    {
        alert("Register not deleted.");
        return false;
    }
}


