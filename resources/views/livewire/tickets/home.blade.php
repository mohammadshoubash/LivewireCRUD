<div>
    <h1 class="text-bold">Home</h1>
    
    <p>{{ $message }}</p>

    <a href="/tickets/create" class="my-2 btn btn-primary">Create ticket</a>

    <table class="table table-bordered table-hover card-text">
        <thead>
            <tr>
                <th class="py-3 text-center text-muted">Ticket ID </th>
                <th class="py-3 text-center text-muted">Customer Name </th>
                <th class="py-3 text-center text-muted">Priority</th>
                <th class="py-3 text-center text-muted">Status</th>
                <th class="py-3 text-center text-muted">Country</th>
                <th class="py-3 text-center text-muted">Comment</th>
                <th class="py-3 text-center text-muted" style="background: white !important;">Date</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->customer_name }}</td>
                    <td>{{ $ticket->priority }}</td>
                    <td>
                        <span class="badge bg-success">Open</span>
                    </td>
                    <td>{{ $ticket->country }}</td>
                    <td>{{ $ticket->comment }}</td>
                    <td>{{ $ticket->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
