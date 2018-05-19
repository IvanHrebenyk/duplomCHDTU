function messege_delete_info_system(){
	alert("Для видалення компоненту з системи, перейдіть на сторінку з повним описом компоненту та натисніть кнопку \"Видалення\"");
}
//new_field(2, new_set_1)
function new_field(step, div){
	alert(step);
	var string_1 = '<div class="form-group element-component">';
	var string_2 = '<label for="generation'+step+'" class="text-secondary label-input">Покоління:</label>';
	var string_3 = '<input type="number" class="form-control" id="generation'+step+'" name="generation_'+step+'" placeholder="1, 2, 3, ..." required>';
	var string_4 = '</div>';
	var del_button_div = '<input type="button" class="text-muted btn btn-default button-del-component" value="–" onclick="del_field('+step+', new_set_'+(step-1)+')">';
	var add_button_div = '<div id="new_set_'+step+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+" onclick="new_field('+(step+1)+', new_set_'+step+')">'+del_button_div+'</div>';
	div.innerHTML = string_1 + string_2 + string_3 + string_4 + add_button_div;
}
function del_field(step, div){
	alert(step);
	div.innerHTML = '';
	var del_button_div = '';
	if(step>2){
		del_button_div = '<input type="button" class="text-muted btn btn-default button-del-component" value="–" onclick="del_field('+(step-1)+', new_set_'+(step-2)+')">';
		var add_button_div = '<div id="new_set_'+(step-1)+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+" onclick="new_field('+(step)+', new_set_'+(step-1)+')">'+del_button_div+'</div>';
	}
	var add_button_div = '<div id="new_set_'+step+'"><input type="button" class="text-muted btn btn-default button-add-component" value="+" onclick="new_field('+(step)+', new_set_'+(step-1)+')">'+del_button_div+'</div>';
	div.innerHTML = add_button_div;

}