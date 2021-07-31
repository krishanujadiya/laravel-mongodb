<footer class="c-footer">
    <div>
        <strong>
            @lang('Copyright') &copy; {{ date('Y') }}
            <x-utils.link href="#" target="_blank" :text="__(appName())" />
        </strong>

        @lang('All Rights Reserved')
    </div>

    <!-- <script src="./node_modules/ckeditor/ckeditor.js"></script> -->
</footer>