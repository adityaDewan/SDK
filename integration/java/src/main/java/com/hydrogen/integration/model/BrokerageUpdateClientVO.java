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

import java.util.ArrayList;
import java.util.List;
import java.util.UUID;

/**
 * BrokerageUpdateClientVO
 */
@javax.annotation.Generated(value = "io.swagger.codegen.languages.JavaClientCodegen", date = "2020-06-11T07:03:53.789Z")
public class BrokerageUpdateClientVO {
  @SerializedName("message")
  private String message = null;

  @SerializedName("nucleus_client_id")
  private UUID nucleusClientId = null;

  @SerializedName("vendor_name")
  private String vendorName = null;

  @SerializedName("vendor_request_data")
  private List<BaseDocument> vendorRequestData = null;

  @SerializedName("vendor_response")
  private UpdateClientResponse vendorResponse = null;

  public BrokerageUpdateClientVO message(String message) {
    this.message = message;
    return this;
  }

   /**
   * Get message
   * @return message
  **/
  @ApiModelProperty(value = "")
  public String getMessage() {
    return message;
  }

  public void setMessage(String message) {
    this.message = message;
  }

  public BrokerageUpdateClientVO nucleusClientId(UUID nucleusClientId) {
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

  public BrokerageUpdateClientVO vendorName(String vendorName) {
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

  public BrokerageUpdateClientVO vendorRequestData(List<BaseDocument> vendorRequestData) {
    this.vendorRequestData = vendorRequestData;
    return this;
  }

  public BrokerageUpdateClientVO addVendorRequestDataItem(BaseDocument vendorRequestDataItem) {
    if (this.vendorRequestData == null) {
      this.vendorRequestData = new ArrayList<BaseDocument>();
    }
    this.vendorRequestData.add(vendorRequestDataItem);
    return this;
  }

   /**
   * Get vendorRequestData
   * @return vendorRequestData
  **/
  @ApiModelProperty(value = "")
  public List<BaseDocument> getVendorRequestData() {
    return vendorRequestData;
  }

  public void setVendorRequestData(List<BaseDocument> vendorRequestData) {
    this.vendorRequestData = vendorRequestData;
  }

  public BrokerageUpdateClientVO vendorResponse(UpdateClientResponse vendorResponse) {
    this.vendorResponse = vendorResponse;
    return this;
  }

   /**
   * Get vendorResponse
   * @return vendorResponse
  **/
  @ApiModelProperty(value = "")
  public UpdateClientResponse getVendorResponse() {
    return vendorResponse;
  }

  public void setVendorResponse(UpdateClientResponse vendorResponse) {
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
    BrokerageUpdateClientVO brokerageUpdateClientVO = (BrokerageUpdateClientVO) o;
    return Objects.equals(this.message, brokerageUpdateClientVO.message) &&
        Objects.equals(this.nucleusClientId, brokerageUpdateClientVO.nucleusClientId) &&
        Objects.equals(this.vendorName, brokerageUpdateClientVO.vendorName) &&
        Objects.equals(this.vendorRequestData, brokerageUpdateClientVO.vendorRequestData) &&
        Objects.equals(this.vendorResponse, brokerageUpdateClientVO.vendorResponse);
  }

  @Override
  public int hashCode() {
    return Objects.hash(message, nucleusClientId, vendorName, vendorRequestData, vendorResponse);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class BrokerageUpdateClientVO {\n");
    
    sb.append("    message: ").append(toIndentedString(message)).append("\n");
    sb.append("    nucleusClientId: ").append(toIndentedString(nucleusClientId)).append("\n");
    sb.append("    vendorName: ").append(toIndentedString(vendorName)).append("\n");
    sb.append("    vendorRequestData: ").append(toIndentedString(vendorRequestData)).append("\n");
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

