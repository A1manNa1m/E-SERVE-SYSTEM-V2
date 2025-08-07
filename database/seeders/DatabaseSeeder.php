<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Announcement;
use App\Models\Event;
use App\Models\Favourite;
use App\Models\Product;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed 2 admins
        User::factory()->create([
            'name' => 'Admin One',
            'email' => 'admin1@example.com',
            'role' => 'admin',
        ]);
        User::factory()->create([
            'name' => 'Admin Two',
            'email' => 'admin2@example.com',
            'role' => 'admin',
        ]);

        // Seed 5 students
        $studentUsers = User::factory(5)->create(['role' => 'student']);

        // Seed 5 staffs
        $staffUsers = User::factory(5)->create(['role' => 'staff']);

        // All users who can have activities
        $activityUsers = $studentUsers->concat($staffUsers);
        // Create activities for each user
        $allActivities = collect();
        foreach ($activityUsers as $user) {
            $activities = collect(['event', 'product', 'announcement', 'service'])->random(2);
            foreach ($activities as $activity) {
                $model = null;
                switch ($activity) {
                    case 'event':
                        $model = Event::factory()->create(['user_id' => $user->id]);
                        break;
                    case 'product':
                        $model = Product::factory()->create(['user_id' => $user->id]);
                        break;
                    case 'announcement':
                        $model = Announcement::factory()->create(['user_id' => $user->id]);
                        break;
                    case 'service':
                        $model = Service::factory()->create(['user_id' => $user->id]);
                        break;
                }
                $allActivities->push($model);
            }
        }
        // Now, assign 1 or 2 random favourites to each student and staff
        foreach ($activityUsers as $user) {
            $favouriteCount = rand(1, 2);
            $favouriteActivities = $allActivities->random($favouriteCount);
            foreach ($favouriteActivities as $activity) {
                Favourite::factory()->create([
                    'user_id' => $user->id,
                    'favouritable_id' => $activity->id,
                    'favouritable_type' => get_class($activity),
                ]);
            }
        }
    }
}
