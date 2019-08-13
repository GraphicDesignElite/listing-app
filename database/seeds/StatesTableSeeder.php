<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert(
                array(
                    array('name' => 'Alabama', 'code' => 'AL', 'slug' => 'alabama'),
                    array('name' => 'Alaska', 'code' => 'AK', 'slug' => 'alaska'),
                    array('name' => 'Arizona', 'code' => 'AZ', 'slug' => 'arizona'),
                    array('name' => 'Arkansas', 'code' => 'AR', 'slug' => 'arkansas'),
                    array('name' => 'California', 'code' => 'CA', 'slug' => 'california'),
                    array('name' => 'Colorado', 'code' => 'CO', 'slug' => 'colorado'),
                    array('name' => 'Connecticut', 'code' => 'CT', 'slug' => 'connecticut'),
                    array('name' => 'Delaware', 'code' => 'DE', 'slug' => 'delaware'),
                    array('name' => 'District of Columbia', 'code' => 'DC', 'slug' => 'district-of-columbia'),
                    array('name' => 'Florida', 'code' => 'FL', 'slug' => 'florida'),
                    array('name' => 'Georgia', 'code' => 'GA', 'slug' => 'georgia'),
                    array('name' => 'Hawaii', 'code' => 'HI', 'slug' => 'hawaii'),
                    array('name' => 'Idaho', 'code' => 'ID', 'slug' => 'idaho'),
                    array('name' => 'Illinois', 'code' => 'IL', 'slug' => 'illinois'),
                    array('name' => 'Indiana', 'code' => 'IN', 'slug' => 'indiana'),
                    array('name' => 'Iowa', 'code' => 'IA', 'slug' => 'iowa'),
                    array('name' => 'Kansas', 'code' => 'KS', 'slug' => 'kansas'),
                    array('name' => 'Kentucky', 'code' => 'KY', 'slug' => 'kentucky'),
                    array('name' => 'Louisiana', 'code' => 'LA', 'slug' => 'louisiana'),
                    array('name' => 'Maine', 'code' => 'ME', 'slug' => 'maine'),
                    array('name' => 'Maryland', 'code' => 'MD', 'slug' => 'maryland'),
                    array('name' => 'Massachusetts', 'code' => 'MA', 'slug' => 'massachusetts'),
                    array('name' => 'Michigan', 'code' => 'MI', 'slug' => 'michigan'),
                    array('name' => 'Minnesota', 'code' => 'MN', 'slug' => 'minnesota'),
                    array('name' => 'Mississippi', 'code' => 'MS', 'slug' => 'mississippi'),
                    array('name' => 'Missouri', 'code' => 'MO', 'slug' => 'missouri'),
                    array('name' => 'Montana', 'code' => 'MT', 'slug' => 'montana'),
                    array('name' => 'Nebraska', 'code' => 'NE', 'slug' => 'nebraska'),
                    array('name' => 'Nevada', 'code' => 'NV', 'slug' => 'nevada'),
                    array('name' => 'New Hampshire', 'code' => 'NH', 'slug' => 'new-hampshire'),
                    array('name' => 'New Jersey', 'code' => 'NJ', 'slug' => 'new-jersey'),
                    array('name' => 'New Mexico', 'code' => 'NM', 'slug' => 'new-mexico'),
                    array('name' => 'New York', 'code' => 'NY', 'slug' => 'new-york'),
                    array('name' => 'North Carolina', 'code' => 'NC', 'slug' => 'north-carolina'),
                    array('name' => 'North Dakota', 'code' => 'ND', 'slug' => 'north-dakota'),
                    array('name' => 'Ohio', 'code' => 'OH', 'slug' => 'ohio'),
                    array('name' => 'Oklahoma', 'code' => 'OK', 'slug' => 'oklahoma'),
                    array('name' => 'Oregon', 'code' => 'OR', 'slug' => 'oregon'),
                    array('name' => 'Pennsylvania', 'code' => 'PA', 'slug' => 'pennsylvania'),
                    array('name' => 'Rhode Island', 'code' => 'RI', 'slug' => 'rhode-island'),
                    array('name' => 'South Carolina', 'code' => 'SC', 'slug' => 'south-carolina'),
                    array('name' => 'South Dakota', 'code' => 'SD', 'slug' => 'south-dakota'),
                    array('name' => 'Tennessee', 'code' => 'TN', 'slug' => 'tennessee'),
                    array('name' => 'Texas', 'code' => 'TX', 'slug' => 'texas'),
                    array('name' => 'Utah', 'code' => 'UT', 'slug' => 'utah'),
                    array('name' => 'Vermont', 'code' => 'VT', 'slug' => 'vermont'),
                    array('name' => 'Virginia', 'code' => 'VA', 'slug' => 'virginia'),
                    array('name' => 'Washington', 'code' => 'WA', 'slug' => 'washington'),
                    array('name' => 'West Virginia', 'code' => 'WV', 'slug' => 'west-virginia'),
                    array('name' => 'Wisconsin', 'code' => 'WI', 'slug' => 'wisconsin'),
                    array('name' => 'Wyoming', 'code' => 'WY', 'slug' => 'wyoming'),
                    /*
                    array('name' => 'American Samoa', 'code' => 'AS', 'slug' => 'american-samoa'),
                    array('name' => 'Guam', 'code' => 'GU', 'slug' => 'guam'),
                    array('name' => 'Northern Mariana Islands', 'code' => 'MP', 'slug' => 'northern-mariana-islands'),
                    array('name' => 'Puerto Rico', 'code' => 'PR', 'slug' => 'puerto-rico'),
                    array('name' => 'United States Minor Outlying Islands', 'code' => 'UM', 'slug' => 'united-states-minor-outlying-islands'),
                    array('name' => 'Virgin Islands', 'code' => 'VI', 'slug' => 'virgin-islands')
                    */
        ));
    }
}
