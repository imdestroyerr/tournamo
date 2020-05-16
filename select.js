var select=document.getElementById("select"),
arr=["XP 2","XP 3","XP 4","XP 5","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2","XP 2",];

for(var i=0;i<arr.length;i++)
{
  var option=document.createElement("OPTION"),
  txt=document.createTextNode(arr[i]);
  option.appendChild(txt);
  select.insertBefore(option,select.lastChild);
}