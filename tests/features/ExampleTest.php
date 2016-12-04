<?php
class ExampleTest extends FeatureTestCase
{
    function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Edwin Ibanez',
            'email' => 'el.chapako@gmail.com'
        ]);

        $this->actingAs($user, 'api')
             ->visit('api/user')
             ->see('Edwin Ibanez')
             ->see('el.chapako@gmail.com');
    }
}
