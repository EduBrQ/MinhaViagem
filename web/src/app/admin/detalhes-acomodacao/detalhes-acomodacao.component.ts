import { Component, OnInit, ViewChild, ElementRef, NgZone } from '@angular/core';
import { } from 'googlemaps';
import { MapsAPILoader } from '@agm/core';
import { FormControl } from '@angular/forms';
import { AcomodacoesService } from '../../services/acomodacoes.service';

@Component({
  selector: 'app-detalhes-acomodacao',
  templateUrl: './detalhes-acomodacao.component.html',
  styleUrls: ['./detalhes-acomodacao.component.css']
})
export class DetalhesAcomodacaoComponent implements OnInit {

  public latitude: number;
  public longitude: number;
  public zoom: number;

  @ViewChild('search')
  public searchElementRef: ElementRef;

  acomodacoes: any;
  total_imagens: number;
  total: number;
  per_page: number;
  page = 1;
  search = '';

  constructor(private mapsAPILoader: MapsAPILoader, private ngZone: NgZone, public acomodacoesService: AcomodacoesService) {

    this.total_imagens = 11;

    this.getAcomodacoes()
      .subscribe((acomodacoes) => {
        this.acomodacoes = acomodacoes.data;
        this.total = acomodacoes.total;
        this.per_page = acomodacoes.per_page;
        // this.page = this.acomodacoes.current_page;

        console.log(this.acomodacoes);

      });

  }

  getAcomodacoes() {
    return this.acomodacoesService.latest(this.page, this.search);
  }

  ngOnInit() {

    this.setupMAPS();

  }

  private setupMAPS() {

    // set google maps defaults
    this.zoom = 4;
    this.latitude = 39.8282;
    this.longitude = -98.5795;

    // set current position
    this.setCurrentPosition();

    // load Places Autocomplete
    this.mapsAPILoader.load().then(() => {
      const autocomplete = new google.maps.places.Autocomplete(this.searchElementRef.nativeElement, {
        types: []
      });
      autocomplete.addListener('place_changed', () => {
        this.ngZone.run(() => {
          // get the place result
          const place: google.maps.places.PlaceResult = autocomplete.getPlace();

          // verify result
          if (place.geometry === undefined || place.geometry === null) {
            return;
          }

          // set latitude, longitude and zoom
          this.latitude = place.geometry.location.lat();
          this.longitude = place.geometry.location.lng();
          this.zoom = 12;
        });
      });
    });

  }

  private setCurrentPosition() {
    if ('geolocation' in navigator) {
      navigator.geolocation.getCurrentPosition((position) => {
        this.latitude = position.coords.latitude;
        this.longitude = position.coords.longitude;
        this.zoom = 12;
      });
    }
  }

}
