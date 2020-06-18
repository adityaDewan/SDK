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
 * AggregationAccountsResponseVO
 */
@javax.annotation.Generated(value = "io.swagger.codegen.languages.JavaClientCodegen", date = "2020-06-11T07:03:53.789Z")
public class AggregationAccountsResponseVO {
  @SerializedName("message")
  private String message = null;

  @SerializedName("nucleus_aggregation_account_id")
  private UUID nucleusAggregationAccountId = null;

  @SerializedName("nucleus_aggregation_accounts")
  private List<AggregationAccountResponseInternalObjectVO> nucleusAggregationAccounts = null;

  @SerializedName("vendor_name")
  private String vendorName = null;

  public AggregationAccountsResponseVO message(String message) {
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

  public AggregationAccountsResponseVO nucleusAggregationAccountId(UUID nucleusAggregationAccountId) {
    this.nucleusAggregationAccountId = nucleusAggregationAccountId;
    return this;
  }

   /**
   * Get nucleusAggregationAccountId
   * @return nucleusAggregationAccountId
  **/
  @ApiModelProperty(value = "")
  public UUID getNucleusAggregationAccountId() {
    return nucleusAggregationAccountId;
  }

  public void setNucleusAggregationAccountId(UUID nucleusAggregationAccountId) {
    this.nucleusAggregationAccountId = nucleusAggregationAccountId;
  }

  public AggregationAccountsResponseVO nucleusAggregationAccounts(List<AggregationAccountResponseInternalObjectVO> nucleusAggregationAccounts) {
    this.nucleusAggregationAccounts = nucleusAggregationAccounts;
    return this;
  }

  public AggregationAccountsResponseVO addNucleusAggregationAccountsItem(AggregationAccountResponseInternalObjectVO nucleusAggregationAccountsItem) {
    if (this.nucleusAggregationAccounts == null) {
      this.nucleusAggregationAccounts = new ArrayList<AggregationAccountResponseInternalObjectVO>();
    }
    this.nucleusAggregationAccounts.add(nucleusAggregationAccountsItem);
    return this;
  }

   /**
   * Get nucleusAggregationAccounts
   * @return nucleusAggregationAccounts
  **/
  @ApiModelProperty(value = "")
  public List<AggregationAccountResponseInternalObjectVO> getNucleusAggregationAccounts() {
    return nucleusAggregationAccounts;
  }

  public void setNucleusAggregationAccounts(List<AggregationAccountResponseInternalObjectVO> nucleusAggregationAccounts) {
    this.nucleusAggregationAccounts = nucleusAggregationAccounts;
  }

  public AggregationAccountsResponseVO vendorName(String vendorName) {
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


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    AggregationAccountsResponseVO aggregationAccountsResponseVO = (AggregationAccountsResponseVO) o;
    return Objects.equals(this.message, aggregationAccountsResponseVO.message) &&
        Objects.equals(this.nucleusAggregationAccountId, aggregationAccountsResponseVO.nucleusAggregationAccountId) &&
        Objects.equals(this.nucleusAggregationAccounts, aggregationAccountsResponseVO.nucleusAggregationAccounts) &&
        Objects.equals(this.vendorName, aggregationAccountsResponseVO.vendorName);
  }

  @Override
  public int hashCode() {
    return Objects.hash(message, nucleusAggregationAccountId, nucleusAggregationAccounts, vendorName);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class AggregationAccountsResponseVO {\n");
    
    sb.append("    message: ").append(toIndentedString(message)).append("\n");
    sb.append("    nucleusAggregationAccountId: ").append(toIndentedString(nucleusAggregationAccountId)).append("\n");
    sb.append("    nucleusAggregationAccounts: ").append(toIndentedString(nucleusAggregationAccounts)).append("\n");
    sb.append("    vendorName: ").append(toIndentedString(vendorName)).append("\n");
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

