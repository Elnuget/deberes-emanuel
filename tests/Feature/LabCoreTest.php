<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Database\Seeders\LabCoreSeeder;

class LabCoreTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(LabCoreSeeder::class);
    }

    public function test_dashboard_loads(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('LabCore');
    }

    public function test_pacientes_loads(): void
    {
        $response = $this->get('/pacientes');
        $response->assertStatus(200);
        $response->assertSee('Directorio de Pacientes');
    }

    public function test_ordenes_loads(): void
    {
        $response = $this->get('/ordenes');
        $response->assertStatus(200);
        $response->assertSee('Órdenes de Trabajo');
    }

    public function test_resultados_loads(): void
    {
        $response = $this->get('/resultados');
        $response->assertStatus(200);
        $response->assertSee('Reporte y Entrega de Resultados');
    }

    public function test_catalogo_loads(): void
    {
        $response = $this->get('/catalogo');
        $response->assertStatus(200);
        $response->assertSee('Catálogo de Análisis Clínicos');
    }

    public function test_asistente_loads(): void
    {
        $response = $this->get('/asistente-ia');
        $response->assertStatus(200);
        $response->assertSee('Asistente Virtual');
    }

    public function test_imprimir_loads(): void
    {
        $response = $this->get('/ordenes/1/imprimir');
        $response->assertStatus(200);
        $response->assertSee('Informe Clínico');
    }

    public function test_inventario_loads(): void
    {
        $response = $this->get('/inventario');
        $response->assertStatus(200);
        $response->assertSee('Control de Inventario', false);
        $response->assertSee('369');
    }

    public function test_inventario_ajuste_stock(): void
    {
        $item = \App\Models\InventarioItem::first();
        $stockAnterior = $item->stock_actual;

        $response = $this->post("/inventario/{$item->id}/ajustar", [
            'tipo_movimiento' => 'entrada',
            'cantidad' => 10,
            'motivo' => 'Compra lote nuevo de prueba',
            'responsable' => 'Nicole & Junior (Dirección Técnica)'
        ]);

        $response->assertRedirect('/inventario');
        $item->refresh();
        $this->assertEquals($stockAnterior + 10, $item->stock_actual);
        $this->assertDatabaseHas('inventario_movimientos', [
            'inventario_item_id' => $item->id,
            'tipo_movimiento' => 'entrada',
            'cantidad' => 10,
        ]);
    }

    public function test_inventario_store(): void
    {
        $response = $this->post('/inventario', [
            'codigo' => 'TEST-REACT-01',
            'nombre' => 'REACTIVO DE CONTROL DE CALIDAD TEST',
            'categoria' => 'Bioquímica Clínica',
            'tipo' => 'Reactivo Líquido Bioquímico',
            'presentacion' => 'Vial 5 mL',
            'precio_venta' => 15.00,
            'costo_unitario' => 6.50,
            'stock_actual' => 20,
            'stock_minimo' => 5,
            'lote' => 'LT-TEST-01',
            'fecha_vencimiento' => '2027-12-31',
            'temperatura' => 'Refrigeración (2°C a 8°C)',
            'proveedor' => 'Roche Diagnostics',
            'ubicacion_estante' => 'Refrigerador A',
        ]);

        $response->assertRedirect('/inventario');
        $this->assertDatabaseHas('inventario_items', [
            'codigo' => 'TEST-REACT-01',
            'stock_actual' => 20
        ]);
    }
}
