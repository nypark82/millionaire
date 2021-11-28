function selected() {
  let rdo_name = document.getElementsByName('q1') ;   
  for (let i=0; i < rdo_name.length; i++) {
  	let id = rdo_name.item(i).id;
    console.log(id);
  	if (rdo_name.item(i).checked) {
	    document.getElementById( id + "_li").style.backgroundColor = 'orange';
    } else {
      document.getElementById( id + "_li").style.backgroundColor = '#330066';
    }
  }
}