<div class="col-xxl-4 col-xl-5 col-lg-10 mt-5 mt-xl-0">
    <div class="cus-scrollbar">
        <div class="sidebar-wrapper d-flex al-item flex-wrap justify-content-end justify-content-xl-center flex-column flex-md-row flex-xl-column flex gap-6">
            <div class="sidebar-area p-5">
                <div class="mb-3">
                    <h6 class="d-inline-flex">
                        Info
                    </h6>
                </div>
                <ul class="d-grid gap-2 mt-5">
                    <li class="d-flex align-items-center gap-2">
                        <i class="material-symbols-outlined mat-icon"> integration_instructions </i>
                        <span class="mdtxt">Developer - Unclaimed</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="material-symbols-outlined mat-icon"> monetization_on </i>
                        <span class="mdtxt">Pricing - {{ $tool->pricing }}</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="material-symbols-outlined mat-icon"> category </i>
                        <span class="mdtxt">Category - {{ $tool->category_name }}</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="material-symbols-outlined mat-icon"> language </i>
                        <span class="mdtxt">Language - {{ $tool->language ?? 'English' }}</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="material-symbols-outlined mat-icon"> integration_instructions </i>
                        <span class="mdtxt">Integration - {{ $tool->integration ?? 'Web' }}</span>
                    </li>
                </ul>
            </div>

            <div class="sidebar-area p-5">
                <div class="mb-3">
                    <h6 class="d-inline-flex">
                        Description
                    </h6>
                </div>

                <p class="mdtxt">{{ $tool->description ?? 'No description' }}</p>
                
                <ul class="d-grid gap-2 mt-5">
                    <li class="d-flex align-items-center gap-2">
                        <i class="material-symbols-outlined mat-icon"> schedule </i>
                        <span class="mdtxt">Always</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="material-symbols-outlined mat-icon"> flag </i>
                        <span class="mdtxt">31k Member</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="material-symbols-outlined mat-icon"> language </i>
                        <span class="mdtxt">Public</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>