
				  <div class="input-group">
					<input id="monto" type="number" class="form-control" name="monto" placeholder="Monto a cambiar" required></input>
					<select id="tipo" name="tipo" class="form-control" onchange="calcular();change(this.value)">
						<Option value="1">Soles > Dolares</option>
						<Option value="2">Dolares > Soles</option>
					</select>
				  </div>
				  <div class="input-group">
					<input id="total" name="total" type="text" class="form-control" placeholder="Dolares" required></input>
				  </div><br>
				  