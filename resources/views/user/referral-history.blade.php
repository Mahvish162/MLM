<x-user>
    <div class="d-flex flex-column animation-element">
        <div class="tab-content card-bs">
            <h3 class="flex p-3">Referral History</h3>

            <!-- Table -->
            <div class="tab-pane fade show active" id="referral-history-tab" role="tabpanel">
                <div class="table-responsive">
                    <table class="table table-dark table-hover mb-0">
                        <thead>
                            <tr class="table-active mb-0">
                                <th scope="col">Date</th>
                                <th scope="col">From User</th>
                                <th scope="col">To User</th>
                                <th scope="col">To User Ref Code</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($referrals as $referral)
                                <tr class="align-middle">
                                    <td class="fw-small">
                                        {{ $referral->created_at->format('d M Y H:i:s') ?? 'N/A' }}
                                    </td>
                                    <td class="fw-medium">
                                        {{ $referral->fromUser->name ?? 'N/A' }}
                                    </td>
                                    <td class="fw-medium">
                                        {{ $referral->toUser->name ?? 'N/A' }}
                                    </td>
                                    <td class="fw-medium">
                                        {{ $referral->to_user_refcode ?? 'N/A' }}
                                    </td>
                                    <td class="fw-medium">
                                        ${{ number_format($referral->commission_amount, 2) }}
                                    </td>
                                    <td class="fw-medium 
                                        {{ $referral->status == 'pending' ? 'text-warning' : 
                                        ($referral->status == 'paid' ? 'text-success' : 'text-danger') }}">
                                        {{ ucfirst($referral->status) }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted">
                                        No referral history found
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-user>
