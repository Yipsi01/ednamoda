<section>
  <header>
    <h1>Gestión de Modas</h1>
  </header>
  <main>
    <table class="full-width">
      <thead>
        <th>Código</th>
        <th>Moda</th>
        <th>Precio</th>
        <th>IVA</th>
        <th>Estado</th>
        <th>&nbsp;</th>
      </thead>
      <tbody class="zebra">
        {{foreach modas}}
        <tr>
          <td>{{idmodas}}</td>
          <td>{{dscmoda}}</td>
          <td>{{prcmoda}}</td>
          <td>{{ivamoda}}</td>
          <td>{{estmoda}}</td>
          <td>&nbsp;</td>
        </tr>
        {{endfor modas}}
      </tbody>
      <tfoot>
        <tr>
          <td colspan="6">Paginación</td>
        </tr>
      </tfoot>
    </table>
  </main>
</section>
