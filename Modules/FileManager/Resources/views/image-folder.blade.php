<x-app-layout layout="filemanager" :assets="$assets ?? []" title="Image" isFslightbox="true" isUppy="true">

<div class="border-bottom pb-3 d-flex align-items-center justify-content-between">
        <h5>Images</h5>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" type="submit">
            <span class="d-flex">
                <svg class="icon-22" width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M16.3328 22H7.66618C4.2769 22 2 19.6229 2 16.0843V7.91672C2 4.37811 4.2769 2 7.66618 2H16.3338C19.7231 2 22 4.37811 22 7.91672V16.0843C22 19.6229 19.7231 22 16.3328 22Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2451 8.67496C11.2451 10.045 10.1301 11.16 8.7601 11.16C7.3891 11.16 6.2751 10.045 6.2751 8.67496C6.2751 7.30496 7.3891 6.18896 8.7601 6.18896C10.1301 6.18896 11.2451 7.30496 11.2451 8.67496ZM19.4005 14.0876C19.6335 14.3136 19.8005 14.5716 19.9105 14.8466C20.2435 15.6786 20.0705 16.6786 19.7145 17.5026C19.2925 18.4836 18.4845 19.2246 17.4665 19.5486C17.0145 19.6936 16.5405 19.7556 16.0675 19.7556H7.6865C6.8525 19.7556 6.1145 19.5616 5.5095 19.1976C5.1305 18.9696 5.0635 18.4446 5.3445 18.1026C5.8145 17.5326 6.2785 16.9606 6.7465 16.3836C7.6385 15.2796 8.2395 14.9596 8.9075 15.2406C9.1785 15.3566 9.4505 15.5316 9.7305 15.7156C10.4765 16.2096 11.5135 16.8876 12.8795 16.1516C13.8132 15.641 14.3552 14.7673 14.827 14.0069L14.8365 13.9916C14.8682 13.9407 14.8997 13.8898 14.9311 13.8391C15.0915 13.5799 15.2495 13.3246 15.4285 13.0896C15.6505 12.7986 16.4745 11.8886 17.5395 12.5366C18.2185 12.9446 18.7895 13.4966 19.4005 14.0876Z" fill="currentColor"></path>
                </svg>
                <span class="ms-3 mb-0">Add Image</span>
            </span>
        </button>
    </div>

    <h4 class="py-3 mb-0">{{__('filemanager.recently_viewed')}}</h4>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
        <div class="col">
            <x-modules.filemanager.image imageDate="Dec 13, 2020" imgName="1234725783" imgLink="just now" imgChange="8.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.image imageDate="Dec 13, 2020" imgName="25783" imgLink="2 day ago" imgChange="7.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.image imageDate="Dec 13, 2020" imgName="49895383" imgLink="a month ago" imgChange="2.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.image imageDate="Dec 13, 2020" imgName="4509853" imgLink="2 day ago" imgChange="1.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.image imageDate="Dec 13, 2020" imgName="280397557" imgLink="just now" imgChange="6.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.image imageDate="Dec 13, 2020" imgName="76935783" imgLink="2 day ago" imgChange="5.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.image imageDate="Dec 13, 2020" imgName="4725783" imgLink="a month ago" imgChange="4.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.image imageDate="Dec 13, 2020" imgName="4725783" imgLink="2 day ago" imgChange="8.png"/>
        </div>
    </div>
    <h3 class="my-3">{{__('filemanager.image')}}</h3>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
        <div class="col">
            <x-modules.filemanager.image imageDate="Dec 13, 2020" imgName="1234725783" imgLink="just now" imgChange="5.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.image imageDate="Dec 13, 2020" imgName="25783" imgLink="2 day ago" imgChange="6.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.image imageDate="Dec 13, 2020" imgName="49895383" imgLink="a month ago" imgChange="7.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.image imageDate="Dec 13, 2020" imgName="4509853" imgLink="2 day ago" imgChange="8.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.image imageDate="Dec 13, 2020" imgName="1234725783" imgLink="just now" imgChange="1.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.image imageDate="Dec 13, 2020" imgName="25783" imgLink="2 day ago" imgChange="2.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.image imageDate="Dec 13, 2020" imgName="49895383" imgLink="a month ago" imgChange="8.png"/>
        </div>
        <div class="col">
            <x-modules.filemanager.image imageDate="Dec 13, 2020" imgName="4509853" imgLink="2 day ago" imgChange="4.png"/>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <div id="drag-drop-area">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
