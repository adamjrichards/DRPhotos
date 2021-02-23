class Cargo {
	constructor( the_status = "empty" ) {
		this.my_status = the_status;
		this.my_slots = [];
	}
	add_this_to_my_cargo( the_new_cargo, under_this_label ) {
		Object.defineProperty( this.my_slots, under_this_label, { writable: true, configurable: true, value: the_new_cargo } );
	}
}