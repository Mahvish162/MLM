<x-user>
    <div class="d-flex flex-column animation-element">
        <div class="tab-content card-bs">
            <h3 class="flex p-3">Daily Team Staking Level Bonus</h3>

            <div class="table-responsive">
                <table class="table table-dark table-hover mb-0">
                    <thead>
                        <tr class="table-active">
                            <th>Date</th>
                            <th>From User</th>
                            <th>Level</th>
                            <th>Percent</th>
                            <th>Amount</th>
                            <th>Remark</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($incomes as $income)
                            <tr>
                                <td class="fw-small">{{ \Carbon\Carbon::parse($income->created_at)->format('d M Y H:i:s') }}</td>
                                <td class="fw-medium">{{ $income->fromUser->name ?? 'N/A' }} (#{{ $income->from_user_id }})</td>
                                <td class="fw-medium">Level {{ $income->level }}</td>
                                <td class="fw-medium">{{ $income->percent }}%</td>
                                <td class="fw-medium text-success">${{ number_format($income->amount, 2) }}</td>
                                <td class="fw-small">{{ $income->remark ?? '-' }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">No level bonus income found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-3 px-3">
                {{ $incomes->links() }}
            </div>
        </div>
    </div>
</x-user>
