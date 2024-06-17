<div class="space-y-6">
    
    <div>
        <x-input-label for="log_name" :value="__('Log Name')"/>
        <x-text-input id="log_name" name="log_name" type="text" class="mt-1 block w-full" :value="old('log_name', $activityLog?->log_name)" autocomplete="log_name" placeholder="Log Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('log_name')"/>
    </div>
    <div>
        <x-input-label for="description" :value="__('Description')"/>
        <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" :value="old('description', $activityLog?->description)" autocomplete="description" placeholder="Description"/>
        <x-input-error class="mt-2" :messages="$errors->get('description')"/>
    </div>
    <div>
        <x-input-label for="subject_type" :value="__('Subject Type')"/>
        <x-text-input id="subject_type" name="subject_type" type="text" class="mt-1 block w-full" :value="old('subject_type', $activityLog?->subject_type)" autocomplete="subject_type" placeholder="Subject Type"/>
        <x-input-error class="mt-2" :messages="$errors->get('subject_type')"/>
    </div>
    <div>
        <x-input-label for="subject_id" :value="__('Subject Id')"/>
        <x-text-input id="subject_id" name="subject_id" type="text" class="mt-1 block w-full" :value="old('subject_id', $activityLog?->subject_id)" autocomplete="subject_id" placeholder="Subject Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('subject_id')"/>
    </div>
    <div>
        <x-input-label for="causer_type" :value="__('Causer Type')"/>
        <x-text-input id="causer_type" name="causer_type" type="text" class="mt-1 block w-full" :value="old('causer_type', $activityLog?->causer_type)" autocomplete="causer_type" placeholder="Causer Type"/>
        <x-input-error class="mt-2" :messages="$errors->get('causer_type')"/>
    </div>
    <div>
        <x-input-label for="causer_id" :value="__('Causer Id')"/>
        <x-text-input id="causer_id" name="causer_id" type="text" class="mt-1 block w-full" :value="old('causer_id', $activityLog?->causer_id)" autocomplete="causer_id" placeholder="Causer Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('causer_id')"/>
    </div>
    <div>
        <x-input-label for="properties" :value="__('Properties')"/>
        <x-text-input id="properties" name="properties" type="text" class="mt-1 block w-full" :value="old('properties', $activityLog?->properties)" autocomplete="properties" placeholder="Properties"/>
        <x-input-error class="mt-2" :messages="$errors->get('properties')"/>
    </div>
    <div>
        <x-input-label for="event" :value="__('Event')"/>
        <x-text-input id="event" name="event" type="text" class="mt-1 block w-full" :value="old('event', $activityLog?->event)" autocomplete="event" placeholder="Event"/>
        <x-input-error class="mt-2" :messages="$errors->get('event')"/>
    </div>
    <div>
        <x-input-label for="batch_uuid" :value="__('Batch Uuid')"/>
        <x-text-input id="batch_uuid" name="batch_uuid" type="text" class="mt-1 block w-full" :value="old('batch_uuid', $activityLog?->batch_uuid)" autocomplete="batch_uuid" placeholder="Batch Uuid"/>
        <x-input-error class="mt-2" :messages="$errors->get('batch_uuid')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>