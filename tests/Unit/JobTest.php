<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    // AAA
    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create(['employer_id' => $employer->id]);

    // Act and Assert
    expect($job->employer->is($employer))->toBeTrue();
});

it('has a title', function() {
    $job = Job::factory()->create(['title' => 'Test Job']);
    expect($job->title)->toBe('Test Job');
});

it('can have tags', function() {
    $job = Job::factory()->create();
    $job->tag('Front end');
    expect($job->tags)->toHaveCount(1);
});
