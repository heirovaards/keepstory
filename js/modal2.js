
// sign up modal
function modal2()
{
    var modal = document.getElementById('id02');
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event)
    {
        if (event.target == modal)
        {
            modal.style.display = "none";
        }
    }
}
