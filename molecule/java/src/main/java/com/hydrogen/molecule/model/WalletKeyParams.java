/*
 * Molecule API Documentation
 * The Hydrogen Molecule API
 *
 * OpenAPI spec version: 1.3.0
 * Contact: info@hydrogenplatform.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.hydrogen.molecule.model;

import java.util.Objects;

import com.google.gson.annotations.SerializedName;
import io.swagger.annotations.ApiModelProperty;

import java.util.UUID;

/**
 * WalletKeyParams
 */
@javax.annotation.Generated(value = "io.swagger.codegen.languages.JavaClientCodegen", date = "2020-07-21T09:54:56.296Z")
public class WalletKeyParams {
  @SerializedName("wallet_id")
  private UUID walletId = null;

  @SerializedName("address")
  private String address = null;

  @SerializedName("private_key")
  private String privateKey = null;

  @SerializedName("key_id")
  private String keyId = null;

  @SerializedName("key_server")
  private String keyServer = null;

  @SerializedName("is_active")
  private Boolean isActive = null;

  @SerializedName("record_status")
  private String recordStatus = null;

  public WalletKeyParams walletId(UUID walletId) {
    this.walletId = walletId;
    return this;
  }

   /**
   * Get walletId
   * @return walletId
  **/
  @ApiModelProperty(required = true, value = "")
  public UUID getWalletId() {
    return walletId;
  }

  public void setWalletId(UUID walletId) {
    this.walletId = walletId;
  }

  public WalletKeyParams address(String address) {
    this.address = address;
    return this;
  }

   /**
   * Get address
   * @return address
  **/
  @ApiModelProperty(required = true, value = "")
  public String getAddress() {
    return address;
  }

  public void setAddress(String address) {
    this.address = address;
  }

  public WalletKeyParams privateKey(String privateKey) {
    this.privateKey = privateKey;
    return this;
  }

   /**
   * Get privateKey
   * @return privateKey
  **/
  @ApiModelProperty(required = true, value = "")
  public String getPrivateKey() {
    return privateKey;
  }

  public void setPrivateKey(String privateKey) {
    this.privateKey = privateKey;
  }

  public WalletKeyParams keyId(String keyId) {
    this.keyId = keyId;
    return this;
  }

   /**
   * Get keyId
   * @return keyId
  **/
  @ApiModelProperty(value = "")
  public String getKeyId() {
    return keyId;
  }

  public void setKeyId(String keyId) {
    this.keyId = keyId;
  }

  public WalletKeyParams keyServer(String keyServer) {
    this.keyServer = keyServer;
    return this;
  }

   /**
   * Get keyServer
   * @return keyServer
  **/
  @ApiModelProperty(value = "")
  public String getKeyServer() {
    return keyServer;
  }

  public void setKeyServer(String keyServer) {
    this.keyServer = keyServer;
  }

  public WalletKeyParams isActive(Boolean isActive) {
    this.isActive = isActive;
    return this;
  }

   /**
   * Get isActive
   * @return isActive
  **/
  @ApiModelProperty(value = "")
  public Boolean isIsActive() {
    return isActive;
  }

  public void setIsActive(Boolean isActive) {
    this.isActive = isActive;
  }

  public WalletKeyParams recordStatus(String recordStatus) {
    this.recordStatus = recordStatus;
    return this;
  }

   /**
   * Get recordStatus
   * @return recordStatus
  **/
  @ApiModelProperty(value = "")
  public String getRecordStatus() {
    return recordStatus;
  }

  public void setRecordStatus(String recordStatus) {
    this.recordStatus = recordStatus;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    WalletKeyParams walletKeyParams = (WalletKeyParams) o;
    return Objects.equals(this.walletId, walletKeyParams.walletId) &&
        Objects.equals(this.address, walletKeyParams.address) &&
        Objects.equals(this.privateKey, walletKeyParams.privateKey) &&
        Objects.equals(this.keyId, walletKeyParams.keyId) &&
        Objects.equals(this.keyServer, walletKeyParams.keyServer) &&
        Objects.equals(this.isActive, walletKeyParams.isActive) &&
        Objects.equals(this.recordStatus, walletKeyParams.recordStatus);
  }

  @Override
  public int hashCode() {
    return Objects.hash(walletId, address, privateKey, keyId, keyServer, isActive, recordStatus);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class WalletKeyParams {\n");
    
    sb.append("    walletId: ").append(toIndentedString(walletId)).append("\n");
    sb.append("    address: ").append(toIndentedString(address)).append("\n");
    sb.append("    privateKey: ").append(toIndentedString(privateKey)).append("\n");
    sb.append("    keyId: ").append(toIndentedString(keyId)).append("\n");
    sb.append("    keyServer: ").append(toIndentedString(keyServer)).append("\n");
    sb.append("    isActive: ").append(toIndentedString(isActive)).append("\n");
    sb.append("    recordStatus: ").append(toIndentedString(recordStatus)).append("\n");
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

