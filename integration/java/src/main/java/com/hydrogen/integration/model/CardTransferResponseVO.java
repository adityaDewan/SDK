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
 * CardTransferResponseVO
 */
@javax.annotation.Generated(value = "io.swagger.codegen.languages.JavaClientCodegen", date = "2020-06-11T07:03:53.789Z")
public class CardTransferResponseVO {
  @SerializedName("card_status")
  private String cardStatus = null;

  @SerializedName("message")
  private String message = null;

  @SerializedName("nucleus_card_id")
  private UUID nucleusCardId = null;

  @SerializedName("nucleus_card_id_from")
  private UUID nucleusCardIdFrom = null;

  @SerializedName("nucleus_card_id_to")
  private UUID nucleusCardIdTo = null;

  @SerializedName("vendor_name")
  private String vendorName = null;

  @SerializedName("vendor_response")
  private Object vendorResponse = null;

  public CardTransferResponseVO cardStatus(String cardStatus) {
    this.cardStatus = cardStatus;
    return this;
  }

   /**
   * Get cardStatus
   * @return cardStatus
  **/
  @ApiModelProperty(value = "")
  public String getCardStatus() {
    return cardStatus;
  }

  public void setCardStatus(String cardStatus) {
    this.cardStatus = cardStatus;
  }

  public CardTransferResponseVO message(String message) {
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

  public CardTransferResponseVO nucleusCardId(UUID nucleusCardId) {
    this.nucleusCardId = nucleusCardId;
    return this;
  }

   /**
   * Get nucleusCardId
   * @return nucleusCardId
  **/
  @ApiModelProperty(value = "")
  public UUID getNucleusCardId() {
    return nucleusCardId;
  }

  public void setNucleusCardId(UUID nucleusCardId) {
    this.nucleusCardId = nucleusCardId;
  }

  public CardTransferResponseVO nucleusCardIdFrom(UUID nucleusCardIdFrom) {
    this.nucleusCardIdFrom = nucleusCardIdFrom;
    return this;
  }

   /**
   * Get nucleusCardIdFrom
   * @return nucleusCardIdFrom
  **/
  @ApiModelProperty(value = "")
  public UUID getNucleusCardIdFrom() {
    return nucleusCardIdFrom;
  }

  public void setNucleusCardIdFrom(UUID nucleusCardIdFrom) {
    this.nucleusCardIdFrom = nucleusCardIdFrom;
  }

  public CardTransferResponseVO nucleusCardIdTo(UUID nucleusCardIdTo) {
    this.nucleusCardIdTo = nucleusCardIdTo;
    return this;
  }

   /**
   * Get nucleusCardIdTo
   * @return nucleusCardIdTo
  **/
  @ApiModelProperty(value = "")
  public UUID getNucleusCardIdTo() {
    return nucleusCardIdTo;
  }

  public void setNucleusCardIdTo(UUID nucleusCardIdTo) {
    this.nucleusCardIdTo = nucleusCardIdTo;
  }

  public CardTransferResponseVO vendorName(String vendorName) {
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

  public CardTransferResponseVO vendorResponse(Object vendorResponse) {
    this.vendorResponse = vendorResponse;
    return this;
  }

   /**
   * Get vendorResponse
   * @return vendorResponse
  **/
  @ApiModelProperty(value = "")
  public Object getVendorResponse() {
    return vendorResponse;
  }

  public void setVendorResponse(Object vendorResponse) {
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
    CardTransferResponseVO cardTransferResponseVO = (CardTransferResponseVO) o;
    return Objects.equals(this.cardStatus, cardTransferResponseVO.cardStatus) &&
        Objects.equals(this.message, cardTransferResponseVO.message) &&
        Objects.equals(this.nucleusCardId, cardTransferResponseVO.nucleusCardId) &&
        Objects.equals(this.nucleusCardIdFrom, cardTransferResponseVO.nucleusCardIdFrom) &&
        Objects.equals(this.nucleusCardIdTo, cardTransferResponseVO.nucleusCardIdTo) &&
        Objects.equals(this.vendorName, cardTransferResponseVO.vendorName) &&
        Objects.equals(this.vendorResponse, cardTransferResponseVO.vendorResponse);
  }

  @Override
  public int hashCode() {
    return Objects.hash(cardStatus, message, nucleusCardId, nucleusCardIdFrom, nucleusCardIdTo, vendorName, vendorResponse);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class CardTransferResponseVO {\n");
    
    sb.append("    cardStatus: ").append(toIndentedString(cardStatus)).append("\n");
    sb.append("    message: ").append(toIndentedString(message)).append("\n");
    sb.append("    nucleusCardId: ").append(toIndentedString(nucleusCardId)).append("\n");
    sb.append("    nucleusCardIdFrom: ").append(toIndentedString(nucleusCardIdFrom)).append("\n");
    sb.append("    nucleusCardIdTo: ").append(toIndentedString(nucleusCardIdTo)).append("\n");
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

