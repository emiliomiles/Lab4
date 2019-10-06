function formChecker()
{
  var g = document.getElementById('guitar').value;
  var t = document.getElementById('tuner').value;
  var s = document.getElementById('strings').value;
  var c = document.getElementById('capo').value;
  var p = document.getElementById('picks').value;

  var bool = false;
  var radios = document.getElementsByName("shipping");

  var i = 0;
  if(g != "" && t != "" && s != "" && c != "" && p != "" && g >= 0 && t >= 0 && s >= 0 && c >= 0 && p >= 0)
  {
    while (!bool && i < radios.length)
    {
      if (radios[i].checked)
      {
        bool = true;
      }
      i++;
    }
    if(!bool)
    {
      alert("Must choose a shipping option.");
    }
    else
    {
      bool = true;
    }
  }
  else
  {
    alert("Can't have negative or blank items. Please enter valid values in the fields.")
  }
  return bool;
}
