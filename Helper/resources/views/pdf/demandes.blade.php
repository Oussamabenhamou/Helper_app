<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                        <div class="card-header">
                        @if (!$demandes->isEmpty())
<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Service ID</th>
            <th>Client Name</th>
            <th>Client Email</th>
            <th>client phone</th>
            <th>ID Expert</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($demandes as $demande)
        <tr>
            <td>{{ $demande->id }}</td>
            <td>{{ $demande->service_id }}</td>
            <td>{{ $demande->client->nom }} {{ $demande->client->prenom }}</td>
            <td>{{ $demande->client->email }}</td>
            <td>{{ $demande->client->telephone }}</td>
            <td>{{ $demande->user_id_partenaire }}</td>
            <td>{{ $demande->created_at->format('d/m/Y H:i') }}</td>
            <td>{{ $demande->updated_at->format('d/m/Y H:i') }}</td>
            <td>
                <span class="badge {{ $demande->statut == 'acceptée' ? 'bg-success' : ($demande->statut == 'refusée' ? 'bg-danger' : 'bg-secondary') }}">
                    {{ $demande->statut }}
                </span>
            </td>
            <td>
                <!-- Actions -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p>Aucune demande trouvée.</p>
@endif
