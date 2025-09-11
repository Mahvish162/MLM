<x-user>
    <div class="d-flex flex-column animation-element">
                <div class="tab-content card-bs">
                    <h3 class="flex p-3">Plans</h3>
                    <!-- Tabs -->

                    <!-- Meta -->
                     <div class="row mb-3 px-3">
                        <div class="col-sm-12">
                            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activatePlanModal">
                                Activate Plan</button>
                        </div>
                     </div>
                    <div class="row row-cols-auto justify-content-between align-items-center px-2 px-sm-4">
                        <!-- Search | Filter -->
                        <div class="d-sm-flex flex-row gap-2">
                            <!-- Search -->


                        </div>
                        <!-- Checks -->

                    </div>
                    <!-- Open Orders Table -->
                    <div class="tab-pane fade show active" id="open-order-tab-pane" role="tabpanel" aria-labelledby="open-order-tab" tabindex="0">
                        <!-- Table -->
                       <div class="table-responsive">
                            <table class="table table-dark table-hover mb-0">
                                <thead>
                                    <tr class="table-active mb-0">
                                        <th scope="col">Plan ID</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Plan Amount</th>
                                        <th scope="col">Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($purchases as $purchase)
                                        <tr class="align-middle">
                                            <td class="fw-medium">{{ $purchase->id }}</td>
                                            <td class="fw-small">{{ $purchase->purchased_at->format('d M Y H:i:s') ?? 'N/A' }}</td>
                                            <td class="fw-medium">{{ $purchase->user->name ?? 'N/A' }}</td>
                                            <td class="fw-medium">${{ number_format($purchase->plan_amount, 2) }}</td>
                                            <td class="fw-medium
                                                {{ $purchase->status == 'pending' ? 'text-warning' :
                                                ($purchase->status == 'approved' ? 'text-success' : 'text-danger') }}">
                                                {{ ucfirst($purchase->status) }}
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">No plan purchases found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Plan Activation Modal -->
<div class="modal fade" id="activatePlanModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Header -->
            <div class="modal-header d-flex">
                <h5 class="d-flex align-items-center gap-3 crypt-grayscale-100 mb-0">Activate Plan</h5>
                <button type="button" class="btn-close text-reset close-notify align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close">
                    <svg class="close-notify" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.5 4.5L4.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4.5 4.5L13.5 13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>

            <!-- Body -->
            <div class="modal-body">
              <form id="activatePlanForm" method="POST" action="{{ route('plan.purchase.store') }}">
                 @csrf
                    <div class="d-flex flex-column">

                        <!-- Referral Code -->
                        <label class="form-label text-sm text-light">User ID</label>
                        <div class="input-group mb-3">
                            <input class="form-control placeholder-text" type="text" id="referral_code" name="referral_code" placeholder="Enter User ID" required>

                        </div>
                        <div id="referral_status" class="mt-1"></div>
                        <label class="form-label text-sm text-light mt-2">Select Plan</label>
                        <div class="input-group mb-3">
                            <select class="form-select crypt-grayscale-300" name="plan_id" id="plan_id" required>
                                <option disabled selected>Select a Plan</option>
                                <option value="1">Basic Plan - ($10 - $199)</option>
                                <option value="2">Standard Plan - ($200 - $499)</option>
                                <option value="3">Premium Plan - ($500 - $999)</option>
                                <option value="4">Ultimate Plan - ($1000 - Above)</option>
                            </select>
                        </div>

                        <!-- Plan Selection -->
                         <label class="form-label text-sm text-light mt-2">Plan Amount</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input type="number"
                                class="form-control crypt-grayscale-300"
                                name="plan_amount"
                                placeholder="Enter plan amount (e.g. 50, 100, 250, 500)"
                                min="1"
                                step="1"
                                id="plan_amount"
                                required>

                        </div>
                        <div id="error" class="mt-1 mb-1 text-danger"></div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-warning">Activate</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

</x-user>
