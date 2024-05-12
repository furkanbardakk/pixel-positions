<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use PHPUnit\Framework\TestCase;

class JobTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            "employer_id" => $employer->id,
        ]);

        // act

       expect($job->employer->is($employer))->toBeTrue();

    }

}
