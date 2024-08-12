<div class="p-4 bg-light rounded-4 shadow-sm">
    @include('livewire.client.evaluation.navigation')
    <h4 class="text-primary fw-bold mb-3">IV - CONFORMITÉ À LA CULTURE D'ENTREPRISE (sur 15)</h4>
    <p class="text-secondary">
        Mettre une croix dans la case correspondante pour chaque élément.
    </p>

    <div class="table-responsive mt-4">
        <table class="table table-borderless rounded-3 shadow-sm align-middle">
            <thead class="bg-primary text-white rounded-top">
                <tr>
                    <th colspan="6" class="text-center py-3">
                        Les éléments essentiels qui traduisent l'ADN Cadyst: Excellence, Performance, Reputation
                    </th>
                </tr>
                <tr>
                    <th rowspan="3" class="align-middle text-center py-4">
                        "Les éléments essentiels qui traduisent l'ADN Cadyst: Excellence, Performance, Reputation"
                    </th>
                    <th colspan="5" class="text-center py-3">Niveau d'atteinte</th>
                </tr>
                <tr class="text-center">
                    <th class="py-2">a- Jamais 0%</th>
                    <th class="py-2">b- Rarement 25%</th>
                    <th class="py-2">c- Souvent 50%</th>
                    <th class="py-2">d- Très souvent 75%</th>
                    <th class="py-2">e- Toujours 100%</th>
                </tr>
                <tr class="text-center">
                    <th class="py-2">0</th>
                    <th class="py-2">0.75</th>
                    <th class="py-2">1.5</th>
                    <th class="py-2">2.25</th>
                    <th class="py-2">3</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($performanceCriteria as $index => $criteria)
                    <tr>
                        <td class="align-middle text-start py-3">{{ $criteria['criteria'] }}</td>
                        @foreach ([0, 0.75, 1.5, 2.25, 3] as $scoreIndex => $value)
                            <td class="text-center align-middle">
                                <input type="radio" wire:model.live="performanceCriteria.{{ $index }}.selectedScore"
                                    value="{{ $value }}" class="form-check-input">
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6" class="text-center text-muted fw-bold fs-5">Veuillez remplir le tableau (0/15)</td>
                </tr>
            </tfoot>
        </table>
    </div>

    @include('livewire.client.evaluation.control-navigation')

</div>
