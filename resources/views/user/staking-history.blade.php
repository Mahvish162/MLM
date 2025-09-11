<x-user>
    <div class="d-flex flex-column animation-element">
        <div class="tab-content card-bs">
            <h3 class="flex p-3">Staking History</h3>

            <div class="table-responsive">
                <table class="table table-dark table-hover mb-0">
                    <thead>
                        <tr class="table-active mb-0">
                            <th scope="col">Date</th>
                            <th scope="col">Plan ID</th>
                            <th scope="col">Plan Amount</th>
                            <th scope="col">Daily Amount</th>
                            <th scope="col">Total Credited</th>
                            <th scope="col">Credited At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($histories as $history)
                            <tr class="align-middle">
                                <td class="fw-small">{{ $history->created_at->format('d M Y H:i:s') }}</td>
                                <td class="fw-medium">{{ $history->plan_id }}</td>
                                <td class="fw-medium">${{ number_format($history->plan_amount, 2) }}</td>
                                <td class="fw-medium text-info">${{ number_format($history->daily_amount, 2) }}</td>
                                <td class="fw-medium text-success">${{ number_format($history->total_credited, 2) }}</td>
                                <td class="fw-medium">{{ $history->credited_at ? $history->credited_at->format('d M Y H:i:s') : 'N/A' }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">
                                    No staking history found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-user>
