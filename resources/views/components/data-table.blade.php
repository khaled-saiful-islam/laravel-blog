<div class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
    <div class="p-8 pt-4 mt-2 bg-white" x-data="window.__controller.dataTableMainController()" x-init="setCallback();">
        <div class="flex pb-4 -ml-3">
            <a href="{{ $data->href->create_new }}"  class="-ml- btn btn-primary shadow-none">
                <span class="fas fa-plus"></span> {{ $data->href->create_new_text }}
            </a>
        </div>

        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-sm text-gray-600">
                    <thead>
                        {{ $head }}
                    </thead>
                    <tbody>
                        {{ $body }}
                    </tbody>
                </table>
            </div>
        </div>

        <div id="table_pagination" class="py-3">
            {{ $model->onEachSide(1)->links() }}
        </div>
    </div>
</div>

