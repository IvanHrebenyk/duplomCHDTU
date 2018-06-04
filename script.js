function messege_delete_info_system(){
	alert("Для видалення компоненту з системи, перейдіть на сторінку з повним описом компоненту та натисніть кнопку \"Видалення\"");
}

$(document).ready(function(){
	var elementIdPowerVideo = document.getElementById("additional_power_videocard");
	if(elementIdPowerVideo)
	if(elementIdPowerVideo.style.visibility != "visible") {
		document.getElementById('field_control').style.marginTop = ((document.getElementById('additional_power_videocard').clientHeight)*(-1));
	}
	var elementIdCpuGraphic = document.getElementById("additional_cpu_graphic");
	if(elementIdCpuGraphic)
	if(elementIdCpuGraphic.style.visibility != "visible") {
		document.getElementById('field_control').style.marginTop = ((document.getElementById('additional_cpu_graphic').clientHeight)*(-1));
	}
	
	var elementIdRamMotherboard = document.getElementById("additional_ram_motherboard");
	if(elementIdRamMotherboard)
	if(elementIdRamMotherboard.style.visibility != "visible") {
		document.getElementById('field_control_1').style.marginTop = ((document.getElementById('additional_ram_motherboard').clientHeight)*(-1));
	}	
	
	var elementIdWifiMotherboard = document.getElementById("additional_wifi_motherboard");
	if(elementIdWifiMotherboard)
	if(elementIdWifiMotherboard.style.visibility != "visible") {
		document.getElementById('field_control_2').style.marginTop = ((document.getElementById('additional_wifi_motherboard').clientHeight)*(-1));
	}
	
	
	var elementIdimage = document.getElementById("add_image_component");
	
	
	if(elementIdimage && elementIdPowerVideo)
	if(elementIdPowerVideo.style.visibility != "visible") {
		document.getElementById('uppload_image_control').style.marginTop = ((document.getElementById('add_image_component').clientHeight)*(-1));
	}	
	
	if(elementIdimage && elementIdCpuGraphic)
	if(elementIdCpuGraphic.style.visibility != "visible") {
		document.getElementById('uppload_image_control').style.marginTop = ((document.getElementById('add_image_component').clientHeight)*(-1));
	}
	
	if(elementIdimage && elementIdRamMotherboard)
	if(elementIdRamMotherboard.style.visibility != "visible") {
		document.getElementById('uppload_image_control').style.marginTop = ((document.getElementById('add_image_component').clientHeight)*(-1));
	}
	 	
});

function additional_power_video(id, buttonStatus){
    var x = document.getElementById(id);
    if (x.style.visibility === 'hidden') {
        x.style.visibility = 'visible';
		x.style.height = '145px';
		document.getElementById(buttonStatus).value = "Видалити додаткове живлення";
		document.getElementById(buttonStatus).style.marginTop = 0;
    } else {
		x.style.height = '0px';
		var heightDiv = x.clientHeight;
        x.style.visibility = 'hidden';
		document.getElementById("count_contact_loop").value = null;
		document.getElementById("count_need_loop").value = null;
		document.getElementById(buttonStatus).value = "Ввести додаткове живлення";
		document.getElementById(buttonStatus).style.marginTop = (heightDiv*(-1));
    }
}

function buttonAddNewUser(){
	var pass = document.getElementById('password').value;
	var yet_pass = document.getElementById('yet_password').value;
	if(pass.length<5)
		alert("Пароль повинен містити не менше 6 символів");
	else if(pass != yet_pass)
		alert('Поля "Пароль" і "Повторіть пароль" повинні співпадати');
	else 
		return true;
	
}
function uppload_image_form(id, buttonStatus){
    var x = document.getElementById(id);
    if (x.style.visibility === 'hidden') {
        x.style.visibility = 'visible';
		x.style.height = '82px';
		document.getElementById(buttonStatus).value = "Не завантажувати картинку";
		document.getElementById(buttonStatus).style.marginTop = 0;
    } else {
		x.style.height = '0px';
		var heightDiv = x.clientHeight;
        x.style.visibility = 'hidden';
		document.getElementById("image_uppload").value = null;
		document.getElementById(buttonStatus).value = "Завантажити картинку";
		document.getElementById(buttonStatus).style.marginTop = (heightDiv*(-1));
    }
}

function additional_cpu_int_graphic(id, buttonStatus){
	//alert('das');
    var x = document.getElementById(id);
    if (x.style.visibility === 'hidden') {
        x.style.visibility = 'visible';
		x.style.height = '80px';
		document.getElementById(buttonStatus).value = "Видалити інтегровану графіку";
		document.getElementById(buttonStatus).style.marginTop = 0;
    } else {
		x.style.height = '0px';
		var heightDiv = x.clientHeight;
        x.style.visibility = 'hidden';
		document.getElementById("title_graphic").value = null;
		document.getElementById(buttonStatus).value = "Ввести інтегровану графіку";
		document.getElementById(buttonStatus).style.marginTop = (heightDiv*(-1));
    }
}

//additional_count_ram_motherboard('additional_ram_motherboard', 'field_control_1')
function additional_count_ram_motherboard(id, buttonStatus){
	var x = document.getElementById(id);
    if (x.style.visibility === 'hidden') {
        x.style.visibility = 'visible';
		x.style.height = '290px';
		document.getElementById(buttonStatus).value = "Видалити дані про слоти RAM";
		document.getElementById(buttonStatus).style.marginTop = 0;
    } else {
		x.style.height = '0px';
		var heightDiv = x.clientHeight;
        x.style.visibility = 'hidden';
		document.getElementById("count_ddr1").value = null;
		document.getElementById("count_ddr2").value = null;
		document.getElementById("count_ddr3").value = null;
		document.getElementById("count_ddr4").value = null;
		document.getElementById(buttonStatus).value = "Ввести дані про слоти RAM";
		document.getElementById(buttonStatus).style.marginTop = (heightDiv*(-1));
    }
}


function new_dynamic_field_pci(step, div){
	var string_1 = '<h5 class="title-component-list">Введення № '+(step-1)+'</h5>';
	var string_2 = '<div class="form-group element-component">';
	  var string_3 = '<label for="generation_pci_'+(step-1)+'" class="text-secondary label-input">Покоління PCI-Express:</label>';
	  var string_4 = '<input type="text" class="form-control" id="generation_pci_'+(step-1)+'" name="generation_pci_'+(step-1)+'" placeholder="" required>';
	var string_5 = '</div>';
	
	var string_6 = '<div class="form-group element-component">';
	  var string_7 = '<label for="slot_'+(step-1)+'" class="text-secondary label-input">Розрядність PCI-express:</label>';
	  var string_8 = '<input type="number" class="form-control" id="slot_'+(step-1)+'" name="slot_'+(step-1)+'" placeholder="" required>';
	var string_9 = '</div>';
	
	var string_10 = '<div class="form-group element-component">';
	  var string_11 = '<label for="count_pci_'+(step-1)+'" class="text-secondary label-input">Кількість таких PCI-express на материнській платі:</label>';
	  var string_12 = '<input type="number" class="form-control" id="count_pci_'+(step-1)+'" name="count_pci_'+(step-1)+'" placeholder="" required>';
	var string_13 = '</div>';
	var string_14 = '<hr class="btn-primary">';
	var del_button_div = '<input type="button" class="text-muted btn btn-default button-del-component" value="–" onclick="del_dynamic_field_pci('+step+', dynamic_field_pci_'+(step-1)+')">';
	var add_button_div = '<div id="dynamic_field_pci_'+step+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+ PCI" onclick="new_dynamic_field_pci('+(step+1)+', dynamic_field_pci_'+step+')">'+del_button_div+'</div>';
	div.innerHTML = string_1 + string_2 + string_3 + string_4 + string_5 + string_6 + string_7 + string_8 + string_9 + string_10 + string_11 + string_12 + string_13 + string_14 + add_button_div;
}

function del_dynamic_field_pci(step, div){
	div.innerHTML = '';
	var del_button_div = '';
	if(step>2){
		del_button_div = '<input type="button" class="text-muted btn btn-default button-del-component" value="–" onclick="del_dynamic_field_pci('+(step-1)+', dynamic_field_pci_'+(step-2)+')">';
		var add_button_div = '<div id="new_set_'+(step-1)+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+ PCI" onclick="new_dynamic_field_pci('+(step)+', dynamic_field_pci_'+(step-1)+')">'+del_button_div+'</div>';
	}
	var add_button_div = '<div id="new_set_'+step+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+ PCI" onclick="new_dynamic_field_pci('+(step)+', dynamic_field_pci_'+(step-1)+')">'+del_button_div+'</div>';
	div.innerHTML = add_button_div;

}

function additional_wifi_on_motherboard(id, buttonStatus){
	//alert('das');
    var x = document.getElementById(id);
    if (x.style.visibility === 'hidden') {
        x.style.visibility = 'visible';
		x.style.height = '80px';
		document.getElementById(buttonStatus).value = "Видалити дані про WiFi";
		document.getElementById(buttonStatus).style.marginTop = 0;
    } else {
		x.style.height = '0px';
		var heightDiv = x.clientHeight;
        x.style.visibility = 'hidden';
		document.getElementById("title_wifi").value = null;
		document.getElementById(buttonStatus).value = "Ввести дані про WiFi";
		document.getElementById(buttonStatus).style.marginTop = (heightDiv*(-1));
    }
}


function new_dynamic_field_usb(step, div){
	var string_1 = '<h5 class="title-component-list">Введення № '+(step-1)+'</h5>';
	var string_2 = '<div class="form-group element-component">';
	  var string_3 = '<label for="generation_usb_'+(step-1)+'" class="text-secondary label-input">Покоління USB:</label>';
	  var string_4 = '<input type="text" class="form-control" id="generation_usb_'+(step-1)+'" name="generation_usb_'+(step-1)+'" placeholder="" required>';
	var string_5 = '</div>';
	
	var string_6 = '<div class="form-group element-component">';
	  var string_7 = '<label for="count_usb_'+(step-1)+'" class="text-secondary label-input">Кількість таких USB на материнській платі:</label>';
	  var string_8 = '<input type="number" class="form-control" id="count_usb_'+(step-1)+'" name="count_usb_'+(step-1)+'" placeholder="" required>';
	var string_9 = '</div>';
	var string_10 = '<hr class="btn-primary">';
	var del_button_div = '<input type="button" class="text-muted btn btn-default button-del-component" value="–" onclick="del_dynamic_field_usb('+step+', dynamic_field_usb_'+(step-1)+')">';
	var add_button_div = '<div id="dynamic_field_usb_'+step+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+ USB" onclick="new_dynamic_field_usb('+(step+1)+', dynamic_field_usb_'+step+')">'+del_button_div+'</div>';
	div.innerHTML = string_1 + string_2 + string_3 + string_4 + string_5 + string_6 + string_7 + string_8 + string_9 + string_10 + add_button_div;
}

function del_dynamic_field_usb(step, div){
	div.innerHTML = '';
	var del_button_div = '';
	if(step>2){
		del_button_div = '<input type="button" class="text-muted btn btn-default button-del-component" value="–" onclick="del_dynamic_field_usb('+(step-1)+', dynamic_field_usb_'+(step-2)+')">';
		var add_button_div = '<div id="new_set_'+(step-1)+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+ USB" onclick="new_dynamic_field_usb('+(step)+', dynamic_field_usb_'+(step-1)+')">'+del_button_div+'</div>';
	}
	var add_button_div = '<div id="new_set_'+step+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+ USB" onclick="new_dynamic_field_usb('+(step)+', dynamic_field_usb_'+(step-1)+')">'+del_button_div+'</div>';
	div.innerHTML = add_button_div;

}

function new_dynamic_field_sata(step, div){
	var string_1 = '<h5 class="title-component-list">Введення № '+(step-1)+'</h5>';
	var string_2 = '<div class="form-group element-component">';
	  var string_3 = '<label for="generation_sata_'+(step-1)+'" class="text-secondary label-input">Покоління SATA:</label>';
	  var string_4 = '<input type="text" class="form-control" id="generation_sata_'+(step-1)+'" name="generation_sata_'+(step-1)+'" placeholder="" required>';
	var string_5 = '</div>';
	
	var string_6 = '<div class="form-group element-component">';
	  var string_7 = '<label for="count_sata_'+(step-1)+'" class="text-secondary label-input">Кількість таких SATA на материнській платі:</label>';
	  var string_8 = '<input type="number" class="form-control" id="count_sata_'+(step-1)+'" name="count_sata_'+(step-1)+'" placeholder="" required>';
	var string_9 = '</div>';
	var string_10 = '<hr class="btn-primary">';
	var del_button_div = '<input type="button" class="text-muted btn btn-default button-del-component" value="–" onclick="del_dynamic_field_sata('+step+', dynamic_field_sata_'+(step-1)+')">';
	var add_button_div = '<div id="dynamic_field_sata_'+step+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+ SATA" onclick="new_dynamic_field_sata('+(step+1)+', dynamic_field_sata_'+step+')">'+del_button_div+'</div>';
	div.innerHTML = string_1 + string_2 + string_3 + string_4 + string_5 + string_6 + string_7 + string_8 + string_9 + string_10 + add_button_div;
}

function del_dynamic_field_sata(step, div){
	div.innerHTML = '';
	var del_button_div = '';
	if(step>2){
		del_button_div = '<input type="button" class="text-muted btn btn-default button-del-component" value="–" onclick="del_dynamic_field_sata('+(step-1)+', dynamic_field_sata_'+(step-2)+')">';
		var add_button_div = '<div id="new_set_'+(step-1)+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+ SATA" onclick="new_dynamic_field_sata('+(step)+', dynamic_field_sata_'+(step-1)+')">'+del_button_div+'</div>';
	}
	var add_button_div = '<div id="new_set_'+step+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+ SATA" onclick="new_dynamic_field_sata('+(step)+', dynamic_field_sata_'+(step-1)+')">'+del_button_div+'</div>';
	div.innerHTML = add_button_div;
}


function new_dynamic_field_connect_mb_1(step, div){
	var string_1 = '<h5 class="title-component-list">Введення № '+(step-1)+'</h5>';
	var string_2 = '<div class="form-group element-component">';
	  var string_3 = '<label for="count_contact_mb_'+(step-1)+'" class="text-secondary label-input">Кількість контактів живлення материнської плати:</label>';
	  var string_4 = '<input type="number" class="form-control" id="count_contact_mb_'+(step-1)+'" name="count_contact_mb_'+(step-1)+'" placeholder="" required>';
	var string_5 = '</div>';
	
	var string_6 = '<hr class="btn-primary">';
	var del_button_div = '<input type="button" class="text-muted btn btn-default button-del-component" value="–" onclick="del_dynamic_field_connect_mb_1('+step+', dynamic_field_connect_mb_'+(step-1)+')">';
	var add_button_div = '<div id="dynamic_field_connect_mb_'+step+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+ З\'єднання з материнською платою" onclick="new_dynamic_field_connect_mb_1('+(step+1)+', dynamic_field_connect_mb_'+step+')">'+del_button_div+'</div>';
	div.innerHTML = string_1 + string_2 + string_3 + string_4 + string_5 + string_6 + add_button_div;
}

function del_dynamic_field_connect_mb_1(step, div){
	div.innerHTML = '';
	var del_button_div = '';
	if(step>2){
		del_button_div = '<input type="button" class="text-muted btn btn-default button-del-component" value="–" onclick="del_dynamic_field_connect_mb_1('+(step-1)+', dynamic_field_connect_mb_'+(step-2)+')">';
		var add_button_div = '<div id="dynamic_field_connect_mb_'+(step-1)+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+ З\'єднання з материнською платою" onclick="new_dynamic_field_connect_mb_1('+(step)+', dynamic_field_connect_mb_'+(step-1)+')">'+del_button_div+'</div>';
	}
	var add_button_div = '<div id="dynamic_field_connect_mb_'+step+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+ З\'єднання з материнською платою" onclick="new_dynamic_field_connect_mb_1('+(step)+', dynamic_field_connect_mb_'+(step-1)+')">'+del_button_div+'</div>';
	div.innerHTML = add_button_div;

}


function new_dynamic_field_connect_cpu(step, div){
	var string_1 = '<h5 class="title-component-list">Введення № '+(step-1)+'</h5>';
	var string_2 = '<div class="form-group element-component">';
	  var string_3 = '<label for="count_contact_cpu_'+(step-1)+'" class="text-secondary label-input">Кількість контактів живлення процесора:</label>';
	  var string_4 = '<input type="number" class="form-control" id="count_contact_cpu_'+(step-1)+'" name="count_contact_cpu_'+(step-1)+'" placeholder="" required>';
	var string_5 = '</div>';
	
	var string_6 = '<div class="form-group element-component">';
	  var string_7 = '<label for="count_loop_cpu_'+(step-1)+'" class="text-secondary label-input">Кількість таких шлейфів:</label>';
	  var string_8 = '<input type="number" class="form-control" id="count_loop_cpu_'+(step-1)+'" name="count_loop_cpu_'+(step-1)+'" placeholder="" required>';
	var string_9 = '</div>';
	
	var string_10 = '<hr class="btn-primary">';
	var del_button_div = '<input type="button" class="text-muted btn btn-default button-del-component" value="–" onclick="del_dynamic_field_connect_cpu('+step+', dynamic_field_connect_cpu_'+(step-1)+')">';
	var add_button_div = '<div id="dynamic_field_connect_cpu_'+step+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+ З\'єднання з процесором" onclick="new_dynamic_field_connect_cpu('+(step+1)+', dynamic_field_connect_cpu_'+step+')">'+del_button_div+'</div>';
	div.innerHTML = string_1 + string_2 + string_3 + string_4 + string_5 + string_6 + string_7 + string_8 + string_9 + string_10 + add_button_div;
}

function del_dynamic_field_connect_cpu(step, div){
	div.innerHTML = '';
	var del_button_div = '';
	if(step>2){
		del_button_div = '<input type="button" class="text-muted btn btn-default button-del-component" value="–" onclick="del_dynamic_field_connect_cpu('+(step-1)+', dynamic_field_connect_cpu_'+(step-2)+')">';
		var add_button_div = '<div id="dynamic_field_connect_cpu_'+(step-1)+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+ З\'єднання з процесором" onclick="new_dynamic_field_connect_cpu('+(step)+', dynamic_field_connect_cpu_'+(step-1)+')">'+del_button_div+'</div>';
	}
	var add_button_div = '<div id="dynamic_field_connect_cpu_'+step+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+ З\'єднання з процесором" onclick="new_dynamic_field_connect_cpu('+(step)+', dynamic_field_connect_cpu_'+(step-1)+')">'+del_button_div+'</div>';
	div.innerHTML = add_button_div;

}







function new_dynamic_field_connect_gpu(step, div){
	var string_1 = '<h5 class="title-component-list">Введення № '+(step-1)+'</h5>';
	var string_2 = '<div class="form-group element-component">';
	  var string_3 = '<label for="count_contact_gpu_'+(step-1)+'" class="text-secondary label-input">Кількість контактів живлення відеокарти:</label>';
	  var string_4 = '<input type="number" class="form-control" id="count_contact_gpu_'+(step-1)+'" name="count_contact_gpu_'+(step-1)+'" placeholder="" required>';
	var string_5 = '</div>';
	
	var string_6 = '<div class="form-group element-component">';
	  var string_7 = '<label for="count_loop_gpu_'+(step-1)+'" class="text-secondary label-input">Кількість таких шлейфів:</label>';
	  var string_8 = '<input type="number" class="form-control" id="count_loop_gpu_'+(step-1)+'" name="count_loop_gpu_'+(step-1)+'" placeholder="" required>';
	var string_9 = '</div>';
	
	var string_10 = '<hr class="btn-primary">';
	var del_button_div = '<input type="button" class="text-muted btn btn-default button-del-component" value="–" onclick="del_dynamic_field_connect_gpu('+step+', dynamic_field_connect_gpu_'+(step-1)+')">';
	var add_button_div = '<div id="dynamic_field_connect_gpu_'+step+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+ Додаткове живлення відеокарти" onclick="new_dynamic_field_connect_gpu('+(step+1)+', dynamic_field_connect_gpu_'+step+')">'+del_button_div+'</div>';
	div.innerHTML = string_1 + string_2 + string_3 + string_4 + string_5 + string_6 + string_7 + string_8 + string_9 + string_10 + add_button_div;
}

function del_dynamic_field_connect_gpu(step, div){
	div.innerHTML = '';
	var del_button_div = '';
	if(step>2){
		del_button_div = '<input type="button" class="text-muted btn btn-default button-del-component" value="–" onclick="del_dynamic_field_connect_gpu('+(step-1)+', dynamic_field_connect_gpu_'+(step-2)+')">';
		var add_button_div = '<div id="dynamic_field_connect_gpu_'+(step-1)+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+ Додаткове живлення відеокарти" onclick="new_dynamic_field_connect_gpu('+(step)+', dynamic_field_connect_gpu_'+(step-1)+')">'+del_button_div+'</div>';
	}
	var add_button_div = '<div id="dynamic_field_connect_gpu_'+step+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+ Додаткове живлення відеокарти" onclick="new_dynamic_field_connect_gpu('+(step)+', dynamic_field_connect_gpu_'+(step-1)+')">'+del_button_div+'</div>';
	div.innerHTML = add_button_div;

}

$(document).keypress(function (e) {
    if (e.which == 13) {
            document.getElementById("search-button").click();
            return false;
    }
});