<x-dashboard-layout>
    @role('admin')
    @include('pages.admin.dashboard')
    @endrole
    @role('instructor')
    @include('pages.instructor.dashboard')
    @endrole
</x-dashboard-layout>
