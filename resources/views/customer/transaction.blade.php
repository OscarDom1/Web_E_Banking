<!-- Other admin dashboard content -->

<h2>Transaction History</h2>
<table>
    <thead>
        <tr>
            <th>User</th>
            <th>Amount</th>
            <th>Description</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->user->name }}</td>
                <td>{{ $transaction->amount }}</td>
                <td>{{ $transaction->description }}</td>
                <td>{{ $transaction->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
