function submitGrade() {

    var Grade = document.getElementById('examres').value;
    if (Grade >= 45)
    {
    var theGrade = document.getElementById('process').value = "passed";
    theGrade.innerHTML = "Passed";
    }
    else if (Grade < 45)
    {
     var theGrade = document.getElementById('process').value = "failed";
     theGrade.innerHTML = "Failed";
    }
    else
    {
      var theGrade = document.getElementById('process').value = "pending";
      theGrade.innerHTML = "Pending";
    }
    
}