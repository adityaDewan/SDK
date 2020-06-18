/*
 * Hydrogen Integration API
 * The Hydrogen Integration API
 *
 * OpenAPI spec version: 1.2.1
 * Contact: info@hydrogenplatform.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.hydrogen.integration.model;

import java.util.Objects;

import com.google.gson.annotations.SerializedName;
import io.swagger.annotations.ApiModelProperty;

import java.util.UUID;

/**
 * ExchangePublicTokenVO
 */
@javax.annotation.Generated(value = "io.swagger.codegen.languages.JavaClientCodegen", date = "2020-06-11T07:03:53.789Z")
public class ExchangePublicTokenVO {
  @SerializedName("integration_type")
  private String integrationType = null;

  @SerializedName("nucleus_client_id")
  private UUID nucleusClientId = null;

  @SerializedName("product")
  private String product = null;

  @SerializedName("vendor_name")
  private String vendorName = null;

  @SerializedName("vendor_response")
  private IavTokenExchangeVendorResponseVO vendorResponse = null;

  public ExchangePublicTokenVO integrationType(String integrationType) {
    this.integrationType = integrationType;
    return this;
  }

   /**
   * Get integrationType
   * @return integrationType
  **/
  @ApiModelProperty(value = "")
  public String getIntegrationType() {
    return integrationType;
  }

  public void setIntegrationType(String integrationType) {
    this.integrationType = integrationType;
  }

  public ExchangePublicTokenVO nucleusClientId(UUID nucleusClientId) {
    this.nucleusClientId = nucleusClientId;
    return this;
  }

   /**
   * Get nucleusClientId
   * @return nucleusClientId
  **/
  @ApiModelProperty(value = "")
  public UUID getNucleusClientId() {
    return nucleusClientId;
  }

  public void setNucleusClientId(UUID nucleusClientId) {
    this.nucleusClientId = nucleusClientId;
  }

  public ExchangePublicTokenVO product(String product) {
    this.product = product;
    return this;
  }

   /**
   * Get product
   * @return product
  **/
  @ApiModelProperty(value = "")
  public String getProduct() {
    return product;
  }

  public void setProduct(String product) {
    this.product = product;
  }

  public ExchangePublicTokenVO vendorName(String vendorName) {
    this.vendorName = vendorName;
    return this;
  }

   /**
   * Get vendorName
   * @return vendorName
  **/
  @ApiModelProperty(value = "")
  public String getVendorName() {
    return vendorName;
  }

  public void setVendorName(String vendorName) {
    this.vendorName = vendorName;
  }

  public ExchangePublicTokenVO vendorResponse(IavTokenExchangeVendorResponseVO vendorResponse) {
    this.vendorResponse = vendorResponse;
    return this;
  }

   /**
   * Get vendorResponse
   * @return vendorResponse
  **/
  @ApiModelProperty(value = "")
  public IavTokenExchangeVendorResponseVO getVendorResponse() {
    return vendorResponse;
  }

  public void setVendorResponse(IavTokenExchangeVendorResponseVO vendorResponse) {
    this.vendorResponse = vendorResponse;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    ExchangePublicTokenVO exchangePublicTokenVO = (ExchangePublicTokenVO) o;
    return Objects.equals(this.integrationType, exchangePublicTokenVO.integrationType) &&
        Objects.equals(this.nucleusClientId, exchangePublicTokenVO.nucleusClientId) &&
        Objects.equals(this.product, exchangePublicTokenVO.product) &&
        Objects.equals(this.vendorName, exchangePublicTokenVO.vendorName) &&
        Objects.equals(this.vendorResponse, exchangePublicTokenVO.vendorResponse);
  }

  @Override
  public int hashCode() {
    return Objects.hash(integrationType, nucleusClientId, product, vendorName, vendorResponse);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class ExchangePublicTokenVO {\n");
    
    sb.append("    integrationType: ").append(toIndentedString(integrationType)).append("\n");
    sb.append("    nucleusClientId: ").append(toIndentedString(nucleusClientId)).append("\n");
    sb.append("    product: ").append(toIndentedString(product)).append("\n");
    sb.append("    vendorName: ").append(toIndentedString(vendorName)).append("\n");
    sb.append("    vendorResponse: ").append(toIndentedString(vendorResponse)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }

}

