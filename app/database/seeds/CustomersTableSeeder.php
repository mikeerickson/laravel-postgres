<?php

class CustomersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('customers')->truncate();

		$customers = array(
			['customer_name' => 'CodeDungeon', 'address' => '6372 Flint Drive', 'city' => 'Huntington Beach', 'state' => 'ca', 'zip' => '92647', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['customer_name' => 'ASG', 'address' => '16742 Gothard #2010', 'city' => 'Huntington Beach', 'state' => 'ca', 'zip' => '92647', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['customer_name' => 'ABC Company', 'address' => '1234 Main Street', 'city' => 'Huntington Beach', 'state' => 'ca', 'zip' => '92647', 'created_at' => new DateTime, 'updated_at' => new DateTime]
		);

		DB::table('customers')->insert($customers);
	}

}
