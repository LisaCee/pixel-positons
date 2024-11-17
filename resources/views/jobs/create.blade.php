<x-layout>
    <x-page-heading>
        Create Job
    </x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO"/>
        <x-forms.input label="Salary" name="salary" placeholder="$60,000"/>
        <x-forms.input label="Location" name="location" placeholder="Palm Springs, CA"/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://fakejob.com"/>

        <x-forms.checkbox label="Feature (Premium)" name="featured"/>

        <x-forms.divider/>
        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="React, JavaScript, PHP"/>

        <x-forms.button>Publish Job</x-forms.button>
    </x-forms.form>
</x-layout>
